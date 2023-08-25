<?php

$raio = $_POST['raio'];
$escolha = $_POST['escolha'];

function perimetro($a)
{
    $mult = (2 * M_PI * $a);
    return $mult;
}
function area($a)
{
    $area = (M_PI * $a * $a);
    return $area;
}
if ($escolha==1) {
    echo "Seu perimetro é ";
    echo perimetro($raio);
}else {
    echo "Sua área é ";
    echo area($raio);
}




?>