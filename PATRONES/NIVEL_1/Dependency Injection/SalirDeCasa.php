<?php

class SalirDeCasa {
    private array $pokayokes;

    public function __construct(array $pokayokes) {
        $this->pokayokes = $pokayokes;        
    }    
    public function alSalirDeCasa() {
        foreach($this->pokayokes as $pokayoke)
        echo $pokayoke->recordatorio() . PHP_EOL;        
    }
}