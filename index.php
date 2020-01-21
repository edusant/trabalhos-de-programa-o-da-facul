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
    <title>Sua loja</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
    $(document).ready( function(){

    //associar o evento de click ao botão
    $('#cpf').focusout( function(){

    if($('#cpf').val().length > 0){
        
        //alert('foi');
        $.ajax({
			url: 'cpf.php',
			method: 'post',
            data: $('#vai').serialize(),
			success: function(data) {
                $('#isso').html(data);
                $('#').val('')
			}
		});
     }
    });
    });

    </script>
</head>
<body class="corpo">
    
    <nav class="navbar navbar-expand-lg bg-info navbar-dark">
    <div class="container">
        <a href="#" class="navbar-brand h1">Sua loja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item">
                        <a class="nav-link text-white" href="#"><h3>Contato</h3> </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-white" href="desenvolvedores.php"><h3>Quem somos</h3></a>
                        </li>    
                        </ul>
                    </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <div class="ajuste">
                <h2>login</h2>
                <form action="validacao.php" method="post" class="text-center form-group">
                        <label for="email">Email</label><br>
                        <input type="email" name="email" id=""><br>
                        <label for="senha">Senha</label><br>
                        <input type="password" name="senha" id="senha"><br>
                        <button type="submit">Entrar</button>
                </form>
            </div>
                </div>
                <div class="col-md-6">
                <div class="ajuste">
                    <h2>Inscreva-se</h2>
                    <form action="" method="post" id="vai" class="text-center form-group">
                        <label for="nome" >Nome:</label><br>
                        <input type="text" minlength="5" class="" name="nome" id=""><br>
                        <label for="cpf">Cpf(só os números)</label><br>
                        
                        <input type="text" maxlength="11" name="cpf" id="cpf"><br>
                        <label for="" id="isso"></label>
                        <label for="email">Email:</label><br>
                        <input type="email" name="email" id=""><br>
                        <label for="senha">Senha:</label><br>
                        <input type="password" name="senha" id="senha"><br>
                        <br>
                        <button id="cad" type="submit" >Cadastrar</button>
                    </form>
            </div>
             
                </div>
             
        </div>
        <h5 class="text-center">Sua loja virtual de sempre!</h5>  
    </div>
    <footer class="">
    <h1>Aqui vem o footer</h1>
    </footer>
</body>
</html>