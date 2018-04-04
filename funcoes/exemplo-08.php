<?php 

//Definindo o tipo de dados do retorno ou de entrada de uma função
function soma(int ... $valores):String{

	return array_sum($valores);

}

echo soma(2,2);


 ?>