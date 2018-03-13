<?php

require './../vendor/autoload.php';

$log = new Monolog\Logger('name_hw');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->addWarning('Foo');