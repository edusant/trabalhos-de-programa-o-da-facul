<?php
    include_once('con_bd.php');
    

    $obj = new bd();
    $link = $obj-> conecta_bd();


    
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios where email = '$email' and senha = '$senha'";

    $resultado = mysqli_query($link, $sql);


    if($resultado){

    $dados_usuario = mysqli_fetch_array($resultado);
    
    if(isset($dados_usuario['nome'])){
        
        session_start();
        $_SESSION['nome'] = $dados_usuario['nome'];
        $_SESSION['id'] = $dados_usuario['id'];
        if($dados_usuario['tipo'] == 0){
        header('Location: usuariocomum.php');
        }
    }else{
        header('Location: index.php?erro=1');
    }

    }else{
        echo 'Erro!';
    }

?>