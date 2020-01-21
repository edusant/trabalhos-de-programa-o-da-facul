<?php
    session_start();
    if(isset($_SESSION['nome']))
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
                
                <?php  
                 session_start(); 
                 echo'Cliente: ' .$_SESSION['nome'];?>
 
                </div>

                <div class="container">
                aqui vai vim minha compras 
                
                </div>
    
</body>
</html>