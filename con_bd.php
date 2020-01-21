<?php
    class bd{
        private $host = 'localhost';
        private $usuario = 'root';
        private $senha = '';
        private $banco = 'trabalho';


        public function conecta_bd(){
            $con = mysqli_connect($this->host,$this->usuario,$this->senha, $this->banco);
            mysqli_set_charset($con,'UTF-8');


            //ver saida para erro
            if(mysqli_connect_errno()){
                echo'erro 1001';
            }
            return $con;
        }

    }

?>