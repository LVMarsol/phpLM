<?php 

$a = 10;

//Passagem de valor por referência
//Irá alterar o valor da variável na memória e não só apenas no escopo que ela faz parte

function trocaValor(&$b){

	$b += 50;

	return $b;

}

echo trocaValor($a);
echo "<br>";
echo $a;
 
 ?>