<?php

// Verificação da variável setada
if(isset($_GET['ordem'])) {
    $ordem = $_GET['ordem'];
}

if(isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];
}

$tipo = "nome";

$animas["Mosquito"] = 1000000;
$animas["Cobra"] = 80000;
$animas["Mosca tsé-tsé"] = 10000;
$animas["Caramujo"] = 10.000;
$animas["Escorpião"] = 3250;
$animas["Tênia"] = 2000;
$animas["Crocodilo"] = 1000;
$animas["Tigre"] = 400;
$animas["Leão"] = 250;
$animas["Leopardo"] = 29;
$animas["Urso"] = 20;
$animas["Abelha"] = 60;
$animas["Tubarão"] = 6;
$animas["Elefante"] = 500;
$animas["Hipopótamo"] = 500;
$animas["Búfalo"] = 200;
$animas["Cervo"] = 130;
$animas["Água-viva"] = 40;
$animas["Hiena"] = 30;
$animas["cão"] = 25000;


// arsort, asort, ksort, krsrot
if($tipo == 'nome' && $ordem =='desc') {
    krsort($animas);
}

elseif($tipo == 'sigla' && $ordem == 'desc') {
    arsort($animas);
}

elseif($tipo == 'nome' && $ordem == 'asc') {
    ksort($animas);
}
else {
    asort($animas);
}

?>