<?php 

function imprimir(){

	$argumentos = func_get_args();

	return $argumentos;

}

var_dump(imprimir("Bom dia",10,"testando"));
 ?>