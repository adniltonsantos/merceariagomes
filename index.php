<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
      <meta name="description" content="JKM">
    <meta name="viewport" content="width=device-width,initial-scale1">
    
    <title>Mercearia Gomes</title>    
  <!-- Logo do Sistema na Aba -->
  <link rel="icon" href="img/logo.png" type="image/gif" sizes="16x16">
    <!-- Link do Java e Css do Bootsrap -->
    <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

    <link rel="stylesheet" href="css/bootstrap.css"/>
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <!-- Link do CSS personalizado -->


<style>
html,body {height: 100%;}

.btn {color: gray;}
h1 {color: white; font-size: 32px; text-align: center;}
.bloco {width: 400px; height: 320px; margin-top: -260px; position: absolute; top:50%; left: 50%; margin-left: -200px;}  
body {
background:url(img/teste.jpeg);
background-repeat: no-repeat;
-moz-background-size: 100% 100%;
-webkit-background-size: 100% 100%;
background-size: 100% 100%;
color: white;
}

::-webkit-input-placeholder {
  opacity: 0.7;

}


.suporte {position: absolute; left: 25px; top:25px;}
.suporte a:link{color: white; opacity:0.8; text-decoration: none;}
.suporte a:hover {color:white; opacity:0.5; }
.suporte a:visited {color: white;}
.rodape {position: absolute; bottom:25px; left: 25px; opacity:0.8;}

</style>  
</head>


<body>

<!-- <img src="icon/logo.png" width="78px" height="86px;"/><br /> -->
<div class="bloco">

<center>
<img src="img/logo-branco.png" width="100px" height="100px">
</center>
<h1>Inicie Sessão no Sistema</h1>

<form method="post" action="index.php?&submit">
    <div class="form-group-lg">
    <input type="text" name="usuario" class="form-control" placeholder="Digite Seu Usuário">
    </div>
    
    <div class="form-group-lg">
    <input type="password" name="senha" class="form-control" placeholder="Digite Sua Senha">
     </div>
     <br />
     <div class="form-group">
    <input type="submit"  value="Entrar" class="btn">
</div>
</form>
   
  <?php

if (isset($_GET['alterado'])){ ?>

<div class="alert alert-success alert-dismissable">
   <button type="button" class="close" data-dismiss="alert" 
      aria-hidden="true">
      &times;
   </button>
  <strong> Sucesso !</strong>  Informações Alterado Com Sucesso.
</div>
<?php }?>


<?php 

include "config.php";
$pdo = conectar();

if (isset($_GET['submit'])){

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$confirmacao = $pdo ->prepare("SELECT * FROM usuario WHERE usuario=:usuario AND senha=:senha");
$confirmacao->bindValue(':usuario',$usuario , PDO::PARAM_STR);
$confirmacao->bindValue(':senha',$senha , PDO::PARAM_STR);
$confirmacao->execute();

$linha = $confirmacao ->rowCount();

if ($linha == 1 ){

    setcookie ("usuario", $usuario);
    setcookie ("senha", $senha);
    
    header('location: home.php');


}else{ ?>
  
  <div class="alert alert-danger alert-dismissable">
   <button type="button" class="close" data-dismiss="alert" 
      aria-hidden="true">
      &times;
   </button>
  <strong> Erro !</strong> Usuário ou Senha inválida.
</div>

<?php } } ?>

</div>

<div class="suporte"><a href="index.php?&suporte">
<span class="glyphicon glyphicon-question-sign" aria-hidden="true" ></span> Suporte</a>
<?php

if (isset($_GET['suporte'])){ ?>

<div class="alert alert-info alert-dismissable">
   <button type="button" class="close" data-dismiss="alert" 
      aria-hidden="true">
      &times;
   </button>
  Entre em contato <strong>13 9 9609-9603</strong> ou <strong>13 9 8130-7676</strong><br />
  ou adniltonweb@gmail.com , Obrigado !
</div>
<?php }?></div>
<div class="rodape">Sistema 3.0 </div>

</body>
</html>
