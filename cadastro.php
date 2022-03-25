<?php
include "Conexao.php";
   class cadastro{
      private $id;
      private $save_fase; 
      private $save_item;

      public static function ListarTodos(){
         $conexao = new conexao();
         $sql = "SELECT * FROM cadastro";
         $dados = $conexao->Consultar($sql);
         return $dados;
      }
   }