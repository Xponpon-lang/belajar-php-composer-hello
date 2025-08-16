<?php

require_once __DIR__ . '/belajar-php-composer-hello/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("BinaSaranalnformatika");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info("Hello World");
$log->info("Selamat Belajar Composer");