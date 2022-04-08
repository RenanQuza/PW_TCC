<?php

include "save.php";

$dados = save::ListarTodos();
$json = json_encode($dados);
header("content-type: application/json; charset=utf-8");
echo $json;
