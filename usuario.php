<?php
include "Conexao.php";
   class usuario{
      private $id;
      private $nome; 


      public static function ListarTodos(){
         $conexao = new conexao();
         $sql = "SELECT * FROM usuario";
         $dados = $conexao->Consultar($sql);
         return $dados;
      }
   }