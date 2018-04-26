<?php declare(strict_types=1); ?>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="assets/calendar.css" rel="stylesheet">
</head>
<body>

<?php

use Ypszi\CalendarGenerator\CalendarGenerator;

$calendarGenerator = new CalendarGenerator(new DateTimeImmutable('2018-01-01'), new DateTimeImmutable('2019-01-01'));
$monthNames = $calendarGenerator->generateMonthNames();
$dayNames = $calendarGenerator->generateDayNames();
$calendar = $calendarGenerator->generate();

?>

<?php foreach ($calendar as $year => $months): ?>
    <?php foreach ($months as $month => $weeks): ?>
        <table class='calendar'>
            <thead>
            <tr>
                <th colspan='7'><?= $year; ?></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan='7' class='monthName'><?= $monthNames[$month]; ?></td>
            </tr>
            <tr>
                <?php foreach ($dayNames as $dayName): ?>
                    <td class='dayName'><?= $dayName; ?></td>
                <?php endforeach; ?>
            </tr>

            <?php foreach ($weeks as $week => $days): ?>
            <?php $dayCountOnLastWeek = count($days); ?>
            <tr>
                <?php foreach ($days as $dayIndex => $day): ?>

                    <?php if ($dayCountOnLastWeek < 7 && (int)$dayIndex === 1): ?>
                        <?php for ($i = 7; $i > $dayCountOnLastWeek; $i--): ?>
                            <td class='day'></td>
                        <?php endfor; ?>
                    <?php endif; ?>

                    <td class='day'><?= $dayIndex; ?></td>
                <?php endforeach; ?>
            <?php endforeach; ?>
            </tr>
        </table>
    <?php endforeach; ?>
<?php endforeach; ?>

</body>
</html>
