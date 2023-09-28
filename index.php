<?php

require_once "vendor/autoload.php";

use App\Contexts\DateContext;
use App\Strategy\Thursday;
use App\Strategy\Birthday;
use App\Strategy\Tuesday;
use App\Strategy\Wednesday;
use App\Strategy\Friday;
use App\Strategy\Monday;
use App\Strategy\Saturday;
use App\Strategy\Sunday;

$thursday = new Thursday();
$birthday = new Birthday();

$dayContext = new DateContext($thursday);
$birthdayContext = new DateContext($birthday);

echo $dayContext->showMessage().PHP_EOL;
echo $birthdayContext->showMessage();



