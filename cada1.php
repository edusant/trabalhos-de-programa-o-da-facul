<?php
    session_start();
    if(!isset($_SESSION['nome']))
    {
      header('location: usuariocomum.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg menu bg-info navbar-dark">
                <div class="container">
                    <a class="navbar-brand h1" href="index.php"><h1> LOGO </h1></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link text-white" href="historico.php"><h3> Meu perfil</h3></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="#"><h3>Minha compras</h3> </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="desenvolvedores.php"><h3>Contato</h3></a>
                        </li>    
                        </ul>
                    </div>

                </div>  
                </nav>

            <div class="container">
            <h1>Cadastrar sua loja</h1>


            <form action="" method="post">
            <label for="nomeloja">Nome da loja</label>
            <input type="text" class="form-control" name="nomeloja" id="nomeloja"> 
            <label for="nomeloja">Cnpj</label>
            <input type="text" class="form-control" name="cnpj" id="cnpj">
            <label for="">Descricao</label>      
            <textarea name="descricao" class="form-control" id="descricao" maxlength="1000" cols="30" rows="10">
            
            </textarea>
            <h1>Endereço</h1>

            <label for="cep">Digite o seu cep</label>
            <br>
            <input type="text" class="" name="cep" id="cep">
            <br>
            <label for="rua">Rua</label>
            <input type="text" class="form-control" name="rua" id="rua">

            <label for="estado">Numero</label>
            <br>
            <input type="text" class="" name="num" id="num">
            <br>
            <label for="bairro">Bairro</label>
            <input type="text" class="form-control" name="bairro" id="bairro">

            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade">
            <br>
            <br>
            <label for="estado">Estado</label>
            <select>
                <option value="SP">São Paulo</option>
                <option value="RJ">Rio de janeiro</option>
                <option value="MG">Minas Gerais</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
            </select>

            
            <center>
            <br>
            <button type="submit">Cadastrar</button>
            </center>

           <br>
           <br> 
           
           
            </div>
    
</body>
</html>