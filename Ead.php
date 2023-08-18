<?php

$valor1 = 2;
$valor2 = 3;


function multiplica($a, $b)
{
    $mult = ($a * $b);
    return $mult;
}
echo "Multiplicação é ";
echo multiplica($valor1, $valor2);



function adicao($a, $b)
{
    $mult = ($a + $b);
    return $mult;
}
echo "<br> adição é ";
echo adicao($valor1, $valor2);


function subtra($a, $b)
{
    $mult = ($a - $b);
    return $mult;
}
echo "<br> Subtração é ";
echo subtra($valor1, $valor2);


function div($a,$b){
    $mult = ($a / $b);
    return $mult;
    }
    echo "<br> adição é ";
    echo div($valor1,$valor2);

?>