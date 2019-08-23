<?php
session_start();
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro de Usuário</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="cadastroStyle.css">
  
</head>
<body>
 
<div>
<div class="container" >
    <div class="col-md-12" >
        <div id="logbox">
            <form id="signup" method="POST" action="cadastrar.php">
            <h1>Cadastro de Usuário</h1>
                <?php
                    if(isset($_SESSION['status_cadastro'])):
                ?>
                <div class="notificacao">
                    <h5>Cadastro Efetuado</h5>
                    <h5>Faca seu login informando usuário e senha</h5> <a href="index.php">AQUI</a></p>
                </div>
                <?php
                endif;
                    if(isset($_SESSION['status_cadastro'])){
                        unset($_SESSION['status_cadastro']);
                    }
                ?>
                <?php                                   // : usando como {} e finalizando com endif
                    if (isset($_SESSION['usuario_existe'])):
                ?>
                <div>
                    <p>O usuário já existe</p>
                <?php
                endif;
                    if(isset($_SESSION['usuario_existe'])){
                        unset($_SESSION['usuario_existe']);
                    }
                ?>
				<input name="nome" type="text" placeholder="Nome" required="required" class="input pass"/>
                <input name="usuario" type="text" placeholder="Usuário" required="required" class="input pass"/>
                <input name="senha" type="password" placeholder="Senha" required="required" class="input pass"/>
                <input type="submit" value="Criar Conta" class="inputButton"/>

            </form>
        </div>
    </div>
  


</div>
</div>

</body>
</html>