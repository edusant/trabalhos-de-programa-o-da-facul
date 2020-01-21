<?php
    include_once('usuario.php');
    $cpf = $_POST['cpf'];
    $obj = new usuario();
    $saida = $obj->validaCPF($cpf);
    echo $saida;

?>