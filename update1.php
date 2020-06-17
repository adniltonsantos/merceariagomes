
<?php set_time_limit(0); ?>
<?php

// Atualiza o campo codbarra para o id_item da tabela item
// referente ao codigo de barra

require_once "config.php";
$pdo = conectar();

$sql = $pdo->query("SELECT * FROM item ");
$sql->execute();

while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
$codbarra= $linha['codbarra_item'];
$id_item = $linha ['id_item'];

$sql2 = $pdo->prepare("UPDATE produto SET codbarra='$id_item' WHERE codbarra='$codbarra' AND status='loja'");
$sql2->execute();


}
echo "Atualizaado com sucesso";

?>