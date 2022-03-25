<?php
  
    class conexao{  
        private $servidor;
        private $banco;
        private $usuario;
        private $senha;
        
        
        public function __construct(){
             $this->servidor ="bmey.atwebpages.com";
             $this->banco = $this->usuario = "4046911_3dsrenan";
             $this->senha = "271351renan";   
        }
        
        public function Consultar($sql){
            
            try{
               $conexao = $this->conectar();
               $preview =  $conexao->query($sql);
               $dados = $preview->fetchAll(PDO::FETCH_ASSOC);
            } catch(PDOException $e){
                 echo "Erro na consulta: " . $e->getMessage();
                 $dados = [];
            } finally{
                return $dados;
            }
        }
        
        public function Conectar(){
            try{
                 $conn = new PDO("mysql:host=$this->servidor;dbname=$this->banco", $this->usuario, $this->senha);
                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                echo "Erro ao conectar: " . $e->getMessage();
                $conn = NULL;
            } finally{
                return $conn;
            }
        }
    }