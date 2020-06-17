<?php include "config.php";
$pdo = conectar();

$usuario = $_COOKIE["usuario"];

$user=$pdo->prepare("SELECT * FROM usuario WHERE usuario=:usuario");
$user->bindValue(':usuario',$usuario,PDO::PARAM_STR);
$user->execute();
$linha = $user->Fetch(PDO::FETCH_ASSOC);
// Pega Usuario e Foto
$usuario = $linha['usuario'];
$foto = $linha['foto'];
?>
<aside id="bloco-menu">

<!-- Bloco da informações do Perfil-->
   <div id="bloco-user">
   <a href="home.php"><img id="icon-user" class="img-circle" src="img/<?php echo $foto;?>" alt="Icone do Usuário"></a>
   <div id="user"><?php echo $usuario;?></div>
   <div id="edit-perfil"><a href="?pg=perfil" class="active">Editar Perfil</a></div>
   <div id="edit-perfil"><a href="encerra.php" class="active">Sair </a></div>
   </div>

<!-- Menus -->
   <nav id="menu">
         <ul>
            <li><a href='?pg=venda'>Venda</a></li>
        <li><a href='?pg=fluxo-caixa&mes=<?php echo date('m'); ?>&ano=<?php echo $ano = date('Y'); ?>'>Fluxo de Caixa </a></li>

            <li><a href='#'>Item</a>
                      <ul class="dropdown-sub"> 
                          <li class="dropdown-sub-menu"><a href="?pg=inseri-item">Cadastrar</a></li> 
                          <li class="dropdown-sub-menu"><a href="?pg=consulte-item">Consultar</a></li> 
                     </ul> </li>

           <li><a href='#'>Loja </a>
                      <ul class="dropdown-sub"> 
                          <li class="dropdown-sub-menu"><a href="?pg=inseri-produto">Inseri Produto</a></li> 
                  
                     </ul> </li>

          <li><a href='#'>Clientes</a>
                      <ul class="dropdown-sub"> 
                          <li class="dropdown-sub-menu"><a href="?pg=inseri-cliente">Cadastrar</a></li>
                          <li class="dropdown-sub-menu"><a href="?pg=relatorio-ativos">Ativos</a></li> 
                          <li class="dropdown-sub-menu"><a href="?pg=relatorio-inativos">Inativos</a></li>   
                  
                     </ul> </li>     
          <li><a href='#'>Despesa</a>
                      <ul class="dropdown-sub">
                          <li class="dropdown-sub-menu"><a href="?pg=inseri-despesa">Inseri Despesa</a></li> 
                          <li class="dropdown-sub-menu"><a href="?pg=despesas-futuras">Pagamento</a></li>
                          <li class="dropdown-sub-menu"><a href="?pg=inseri-tipo-despesa">Tipo de Despesa</a></li>  
                  
                     </ul> </li>                  

   </nav>
<div class="version">Versão do Sistema 3.0</div>
</aside>
