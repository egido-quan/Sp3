<?php

include "singleton.php";

$tigre = Tigger::getInstance();

$rugidos = rand(1, 10);

for ($i = 1; $i <= $rugidos; $i++) {
    echo "$i - ";
    $tigre->roar() . PHP_EOL;
}

echo PHP_EOL . "El tigre ha rugido " . $tigre->getCounter() . " veces";
