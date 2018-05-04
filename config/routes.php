<?php declare(strict_types=1);

use Ypszi\CalendarGenerator\Action\CalendarAction;

$app->get('[/]', CalendarAction::class);
