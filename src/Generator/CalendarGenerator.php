<?php declare(strict_types=1);

namespace Ypszi\CalendarGenerator\Generator;

use DateInterval;
use DatePeriod;
use DateTime;
use DateTimeImmutable;
use DateTimeInterface;

class CalendarGenerator
{
    /** @var DateTimeImmutable */
    private $startDate;

    /** @var DateTimeImmutable */
    private $endDate;

    public function __construct(DateTimeImmutable $startDate, DateTimeImmutable $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * @return DateTime[]
     */
    public function generate(): array
    {
        $calendar = [];

        $days = $this->createDatePeriod($this->startDate, new DateInterval('P1D'), $this->endDate);
        foreach ($days as $day) {
            $calendar[$day->format('Y')][$day->format('n')][$day->format('W')][$day->format('j')] = $day;
        }

        return $calendar;
    }

    public function generateMonthNames(): array
    {
        $monthNames = [];
        $oneYearPeriodByMonths = $this->createDatePeriod(
            $this->startDate,
            new DateInterval('P1M'),
            $this->startDate->add(new DateInterval('P1Y'))
        );

        foreach ($oneYearPeriodByMonths as $month) {
            $monthNames[$month->format('n')] = $month->format('F');
        }

        return $monthNames;
    }

    public function generateDayNames(): array
    {
        $dayNames = [];
        $oneWeekPeriodByDays = $this->createDatePeriod(
            $this->startDate,
            new DateInterval('P1D'),
            $this->startDate->add(new DateInterval('P1W'))
        );

        foreach ($oneWeekPeriodByDays as $day) {
            $dayNames[$day->format('j')] = $day->format('l');
        }

        return $dayNames;
    }

    /**
     * @return DateTime[]
     */
    private function createDatePeriod(
        DateTimeInterface $start,
        DateInterval $interval,
        DateTimeInterface $end
    ): DatePeriod {
        return new DatePeriod($start, $interval, $end);
    }
}
