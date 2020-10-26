<?php declare(strict_types=1);

namespace Ypszi\CalendarGenerator\Action;

use DateTimeImmutable;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\Twig;
use Throwable;
use Ypszi\CalendarGenerator\Generator\CalendarGenerator;

class CalendarAction
{
    /** @var Twig */
    private $twig;

    public function __construct(Twig $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(Request $request, Response $response): ResponseInterface
    {
        $now = new DateTimeImmutable();
        $startDate = $request->getQueryParam('startDate', $now->format('Y-01-01'));
        $endDate = $request->getQueryParam('endDate', $now->format('Y-12-31'));

        try {
            $calendarGenerator = new CalendarGenerator(
                new DateTimeImmutable($startDate),
                new DateTimeImmutable($endDate)
            );
        } catch (Throwable $e) {
            return $this->twig->render($response, 'error.html.twig', ['error' => $e]);
        }

        return $this->twig->render(
            $response,
            'calendar.html.twig',
            [
                'monthNames' => $calendarGenerator->generateMonthNames(),
                'dayNames' => $calendarGenerator->generateDayNames(),
                'calendar' => $calendarGenerator->generate(),
                'editable' => (bool)$request->getQueryParam('editable', false),
            ]
        );
    }
}
