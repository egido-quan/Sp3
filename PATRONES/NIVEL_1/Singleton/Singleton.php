<?php

class Tigger {
    static private  $instanciaUnica = null;
    static private int $cuenta = 0;

    private function __construct() {
            echo "Building character..." . PHP_EOL;
    }

    public static function getInstance() {
        if (self::$instanciaUnica == null) {
            self::$instanciaUnica = new Tigger();
        }
        return self::$instanciaUnica;
    }

    public function roar() {
            echo "Grrr!" . PHP_EOL;
            self::$cuenta += 1;
    }
    public function getCounter() {
        return self::$cuenta;
    }
}


