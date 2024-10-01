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

function recordatorio(Pokayoke $pokayoke) {
    $Recordatorio = new SalirDeCasa($pokayoke);
echo $Recordatorio->alSalirDeCasa();
}


$movil = new Movil();
recordatorio($movil);

$cartera = new Cartera();
recordatorio($cartera);

$llaves = new LlavesCasa();
recordatorio($llaves);

$tokenTransporte = match (rand(1,3)) {
    1 => new LlavesCoche(),
    2 => new LlavesMoto(),
    3 => new TarjetaTmb(),
};
recordatorio($tokenTransporte);

