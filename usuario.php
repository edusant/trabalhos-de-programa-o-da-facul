<?php
    

    class usuario{
        public function atualizardados($s1, $s2, $s3){
            include_once('con_bd.php');
    
            session_start();
            $obj = new bd();
            $link = $obj-> conecta_bd();
            $dado = '';
            if(strlen($s2) < 3 & strlen($s3) < 3){
                return "Senha muito fraca";
            }else{
            if($s2 == $s3){
                if($s2 == $s3){
                    $id = $_SESSION['id'];
                    $sql = "UPDATE usuarios set senha = '$s2' where id ='$id'";
                    mysqli_query($link, $sql);
                    $dado = "Senha atualizada com sucesso";
                }else{
                    $dado = 'Erro1001';
                }
            }
        }
            return $dado;

        }
        public function testar(){
            $senha =  $_POST['senha'];
        
        }
        //testar cpf
        function validaCPF($cpf ) {

            // Verifica se um número foi informado
            if(empty($cpf)) {
                return 'cpf inválido<br>';
            }
        
            // Elimina possivel mascara
            $cpf = preg_replace("/[^0-9]/", "", $cpf);
            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
            
            // Verifica se o numero de digitos informados é igual a 11 
            if (strlen($cpf) != 11) {
                return 'cpf inválido<br>';
            }
            // Verifica se nenhuma das sequências invalidas abaixo 
            // foi digitada. Caso afirmativo, retorna falso
            else if ($cpf == '00000000000' || 
                $cpf == '11111111111' || 
                $cpf == '22222222222' || 
                $cpf == '33333333333' || 
                $cpf == '44444444444' || 
                $cpf == '55555555555' || 
                $cpf == '66666666666' || 
                $cpf == '77777777777' || 
                $cpf == '88888888888' || 
                $cpf == '99999999999') {
                return 'cpf inválido<br>';
             // Calcula os digitos verificadores para verificar se o
             // CPF é válido
             } else {   
                
                for ($t = 9; $t < 11; $t++) {
                    
                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) {
                        return 'cpf inválido<br>';
                    }
                }
        
                return 'Cpf válido<br>';
            }
        }

    }
    
    class loja{
    
        public function cadastrar_loja($nome, $descricao, $cnpj){
            include_once('con_bd.php');
        
            session_start();
            $iddono = $_SESSION['id'];  
            $obj = new bd();
            $link = $obj-> conecta_bd();
            $dado = '';
            if(
                empty($nome) || 
                empty($descricao) || 
                empty($iddono) ||
                empty($cnpj)
            
                ){
                    return 'Erro, 1002, há campos vazios';
                    die();
                }
                else
                {
            
            
                        
                $sql = "INSERT into loja(nome,descricao, id_dono, cnpj ) values('$nome','$descricao','$iddono','$cnpj')";
                mysqli_query($link, $sql);
                return 'Cadastro feito';
                die();
            }
            return 'Ferrou!';
        
    
        }
    
    
    }
    class endereco{
        public function cadastrarLoja($cep, $rua, $bairro, $cidade, $num, $estado){
        include_once('con_bd.php');
        if(
            empty($cep) == true || 
            empty($rua) == true || 
            empty($bairro) == true || 
            empty($estado) == true || 
            empty($cidade) == true || 
            empty($num) == true){
            return'<br>campos vazios!';
        }

            $obj = new bd();
            $link = $obj-> conecta_bd();
            $id = $_SESSION['id'];
            $sql = "INSERT into lojaendereco(cep, rua, numero, bairro, cidade,  estado, id_loja) values('$cep','$rua','$num','$bairro','$cidade','$estado','$id')";
            mysqli_query($link, $sql);
            echo'<br>foi';


        }
    }


?>