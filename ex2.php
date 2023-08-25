<?php

$escolha = $_POST['escolha'];
$temperatura = $_POST['temperatura'];

//Farenheit para graus
function farenheit($a)
{
    $mult = (($a-32)/1.8);
    return $mult;
}

//graus para Farenheit
function graus($a)
{
    $area = ($a*1.8+32);
    return $area;
}

if ($escolha==1) {
    echo "Sua temperatura convertida de Farenheit para graus ";
    echo farenheit($temperatura);
}else {
    echo "Sua temperatura convertida de graus para Farenheit ";
    echo graus($temperatura);
}









?>