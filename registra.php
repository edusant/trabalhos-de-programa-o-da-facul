<?php
    include_once('con_bd.php');

    $obj = new bd();
    $link = $obj-> conecta_bd();

    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    $email = $_POST['email'];
    $tipo = false; 

    
    $sql = "SELECT email from usuarios where email = '$email'";
    if($resultado = mysqli_query($link, $sql)){
        $dados = mysqli_fetch_array($resultado);
        var_dump($dados);
        if(isset($dados['email'])){
            header('location: index.php?erro=2');
        }
        else{
            $sql = "INSERT into usuarios(nome, email, senha, tipo) values('$nome','$email','$senha','$tipo')";
        }
        if(mysqli_query($link, $sql)){
            echo 'Usuario cadastrado com sucesso!';
        }
        else
        {
            echo 'Erro ao cadastrar usuario!';
        }
       



    }else{
        echo 'Erro';
    }   



    $sql = "INSERT INTO  usuario(nome, email, senha) values('$nome','$email','$senha')";



?>