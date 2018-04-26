<?php declare(strict_types=1);

use Ypszi\CalendarGenerator\App\App;

$app = new App();

require CONFIG_PATH . '/routes.php';

return $app;
