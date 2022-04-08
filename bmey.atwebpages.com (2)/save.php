<?php
include "conexao.php";
   class save{
      private int $id;
      private int $id_client_fk;
      private string $save_fase;
      private int $save_item;

      public static function ListarTodos(){
         $conexao = new Conexao();
         $sql = "SELECT * FROM save";
         $dados = $conexao->Consultar($sql);
         return $dados;
      }
   


       public function __construct(string $save_fase, int $save_item){
            $this->id = $id;
            $this->id_client_fk = $id_client_fk; 
            $this->save_fase = $save_fase;
            $this->save_item = $save_item;

        }
        
       public function Cadastrar(){
            $conexao = new Conexao();
            $sql = "INSERT INTO
            usuario(save_fase)
            VALUES (:save_fase)";
             $sql = "INSERT INTO
            usuario(save_fase)
            VALUES (:save_fase)";
            $pdo = $conexao->Conectar();
            $preparo = $pdo->prepare($sql);
            $preparo->bindParam(':save_fase', $this->save_fase);
            $preparo->bindParam(':save_item', $this->save_item);
            $preparo->execute();
        }


    
   }
   
   ?>