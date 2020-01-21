<?php
    session_start();
    if(!isset($_SESSION['nome']))
    {
      header('location: index.php?erro=1');
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg menu bg-info navbar-dark">
                <div class="container">
                    <a class="navbar-brand h1" href="usuariocomum.php"><h1> LOGO </h1></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link text-white" href="loja.php"><h3> Loja</h3></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="historico.php"><h3>Perfil</h3></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="minhas_compras.php"><h3>Compras</h3> </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="sair.php"><h3>sair</h3></a>
                        </li>    
                        </ul>
                    </div>

                </div>  
                </nav>

                <div class="container">
                    <h1>Atualizar produtos</h1>
                    <form action="">
                    <label for="">Código do produto</label><br>
                    <input type="text" name="" id="">
                    <br>
                    <label for="">Nome</label><br>
                    <input type="text" name="" class="form-control" id="">
                    <br>
                    <br>
                    <label for="">Quantidade disponivel para a venda:</label> 
                    <input type="text" name="" id="">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <label for="">Preço do produto:</label>
                    <input type="text"><br>
                    <label for="">Descrição</label>
                    <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                    <br>
                    <br>
                    <button type="submit">Atualizar</button>
                    <br>
                    <br>
                    </form>
    </div>

</body>
</html>