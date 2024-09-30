<?php

class SalirDeCasa {
    private $pokayoke;

    public function __construct(Pokayoke $pokayoke) {
        $this->pokayoke = $pokayoke;        
    }    
    public function alSalirDeCasa() {
        return $this->pokayoke->recordatorio();        
    }
}