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

    
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">

            <!-- regarecar os dados do clientes -->
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">

            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email">

            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf">
            <div>
            <h1>Atualizar senha</h1>
            <form action="" method="post">
            <label for="pwd">Digite sua senha atual</label>
            <input type="password" class="form-control" name="pwd" id="pwd">
                
                <label for="npwd">Nova senha</label>
                <input type="password" minlength="5" class="form-control" name="npwd" id="npwd">
                <label for="n1pwd">Confirme a senha</label>
                <input type="password" minlength="5" class="form-control" name="n1pwd" id="n1pwd">
                <br>
                <button  type="submit" minlength="5" name="foi" value="call">Atualizar</button>
            </form>
            <?php
            if(isset($_POST['pwd'])){
                if(true !=(empty($_POST['pwd'])) & true !=(empty($_POST['npwd'])) & true !=(empty($_POST['n1pwd']))){

                    $s1 = md5($_POST['pwd']);
                    $s2 = md5($_POST['npwd']);
                    $s3 = md5($_POST['n1pwd']);
                    include_once('usuario.php');
                    $obj = new usuario();
                    echo $obj->atualizardados($s1, $s2, $s3);
                }
                else
                {
                    echo'Erro, aumente o os cacteres!';
                }
            
            }
        
            ?>
            </div>
            </div>

            <div class="col-md-3">
            </div>
        </div>
    
    </div>
    <footer>
    <h1>Aqui vem o footer</h1>
    </footer>
    
</body>
</html>