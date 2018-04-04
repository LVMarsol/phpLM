<?php 

$pessoas = array();

array_push($pessoas, array(
	'nome' =>'Lucas',
	'idade'=>20

));

array_push($pessoas, array(
	'nome' =>'Rafael',
	'idade'=>25

));

echo json_encode($pessoas);

 ?>