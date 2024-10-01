<?php

class TarjetaTmb extends TokenTransporte {
    public function recordatorio() {
        return PHP_EOL . "Parece que hoy hay atascos. Mejor ves en transporte público." . PHP_EOL .
         "No olvides coger la tarjeta del TMB!" . PHP_EOL;
    }
}