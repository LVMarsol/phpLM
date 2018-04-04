<?php 

$json = '[{"nome":"Lucas","idade":20},{"nome":"Rafael","idade":25}]';

//json_encode -> Transforma um array em JSON
//json decode -> Transforma um JSON em array (parâmetro true) | em objeto (sem parâmetro true)

$data = json_decode($json,true);

var_dump($data);

 ?>