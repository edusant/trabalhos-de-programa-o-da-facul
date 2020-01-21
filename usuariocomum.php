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
    <h1>Aqui vem o usuário comum</h1>
    <div class="container">
    <div class="row">
        <div class="col-md-3">
        <?php 
        echo 'Nome: '.$_SESSION['nome'].'<br>'; 
        
        echo 'Usuário comum';
        
        ?>
        <br>
        <h3><a href="cada1.php">Tem uma loja? então comece a vender com a gente</a></h3>
        <br>
        <a href="comprar.php">Comprar</a>
        </div>
        
        <div class="col-md-6 form-group">
        <input type="text" class="form-control" placeholder="Buscar" name="busca" id="busca">
        <input type="radio" name="pesquisa" value="produto"> Produto
        <input type="radio" name="pesquisa" value="vendedor"> Vendedor
        <br>
        
        <button type="submit">Bucar</button>
        <br>
       <br>
        <div class="divbusca">
        
        </div>
        <br>
        <span><button type="submit">Anterior</button>  <button>Proximo</button></span>
        </div>
        <div class="col-md-3">
        
        </div>
        </div>
    </div>
</body>
</html>