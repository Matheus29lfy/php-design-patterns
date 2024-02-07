<?php

use Alura\DesignPattern\Log\FileLogManager;
use Alura\DesignPattern\Log\StdoutLogManager;

require_once 'vendor/autoload.php';

// $logManager = new StdoutLogManager();
$logManager = new FileLogManager(__DIR__ . '/log');
$logManager->log('info', 'Testando log manager');
