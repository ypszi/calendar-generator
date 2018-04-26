<?php declare(strict_types=1);

namespace Ypszi\CalendarGenerator\Action;

use DateTimeImmutable;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Response;
use Slim\Views\Twig;
use Ypszi\CalendarGenerator\Generator\CalendarGenerator;

class CalendarAction
{
    /** @var Twig */
    private $twig;

    public function __construct(Twig $twig)
    {
        $this->twig = $twig;
    }

    public function __invoke(): ResponseInterface
    {
        $calendarGenerator = new CalendarGenerator(
            new DateTimeImmutable('2018-01-01'),
            new DateTimeImmutable('2019-01-01')
        );

        return $this->twig->render(
            new Response(),
            'calendar.html.twig',
            [
                'monthNames' => $calendarGenerator->generateMonthNames(),
                'dayNames' => $calendarGenerator->generateDayNames(),
                'calendar' => $calendarGenerator->generate(),
            ]
        );
    }
}
