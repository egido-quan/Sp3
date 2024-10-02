<?php
include "Pokayoke.php";
include "SalirDeCasa.php";
include "LlavesCasa.php";
include "TokenTransporte.php";
include "LlavesMoto.php";
include "LlavesCoche.php";
include "Movil.php";
include "TarjetaTmb.php";
include "Cartera.php";


$pokayokes = array(new Movil(), new Cartera(), new LlavesCasa());

$pokayokes[] = match (rand(1,3)) {
    1 => new LlavesCoche(),
    2 => new LlavesMoto(),
    3 => new TarjetaTmb(),
};

$hoy = new SalirDeCasa($pokayokes);
$hoy->alSalirDeCasa();


