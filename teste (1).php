<?php

include "usuario.php";

$dados = usuario::ListarTodos();
var_dump($dados); 

include "cadastro.php";

$dados = cadastro::ListarTodos();
var_dump($dados); 