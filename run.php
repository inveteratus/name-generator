<?php

require __DIR__ . '/vendor/autoload.php';

$generator = new \NameGenerator\NameGenerator();

for ($i = 0; $i < 10; $i++) {
    echo $generator->generate() . PHP_EOL;
}
