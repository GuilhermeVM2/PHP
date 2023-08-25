<?php


$salario = $_POST['salario'];
$horastrabalhadas = $_POST['horastrabalhadas'];

$salariobruto = $salario*$horastrabalhadas;
$impostoderenda = $salariobruto*0.11;
$inss = $salariobruto*0.08;
$sindicato = $salariobruto*0.05;
$salarioliquido = $salariobruto-$impostoderenda-$inss-$sindicato;

echo "Seu salario bruto é R$ $salariobruto";
echo "<br> Seu gasto com imposto de renda é R$ $impostoderenda";
echo "<br> Seu gasto com INSS é R$ $inss";
echo "<br> Seu gasto com sincicato é R$ $sindicato";
echo "<br> Seu Salario Líquido é R$ $salarioliquido";
echo "<br> Faz o L";








?>