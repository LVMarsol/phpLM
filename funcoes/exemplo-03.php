<?php 

function imprimir($texto = "Mundo" , $periodo = "Bom dia"){

	return "Olá $texto! $periodo<br>";

}
echo imprimir();
echo imprimir("Lucas","Boa noite");
echo imprimir("Alice","Boa tarde ");


 ?>