<?php

$scriptStartTime = microtime(true);

require_once '../vendor/autoload.php';

use PetShop\Logger;
use PetShop\PetShop;

Logger::log('Page loaded petShop.php');

$petShop = new PetShop();

$petShop->saveTest();

$petShop->savePetShop();

$petShop->logStats();

$scriptEndTime = microtime(true);
$executionTime = Logger::getExecutionTime($scriptStartTime, $scriptEndTime);
echo 'Total Script Execution Time: ' . $executionTime . ' milli seconds';
