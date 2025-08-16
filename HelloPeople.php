<?php

require_once __DIR__ . '/vendor/autoload.php';

use Binasaranainformatika\Data\People;

$people = new People("Anita");

echo $people->sayHello("Dita") . PHP_EOL;