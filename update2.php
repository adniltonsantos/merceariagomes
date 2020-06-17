<?php set_time_limit(0); ?>
<?php 


require_once "config.php";
$pdo = conectar();

$sql = $pdo->query("SELECT * , COUNT(*) as total FROM produto WHERE status='loja' GROUP BY codbarra");
$sql->execute();

while($linha = $sql->fetch(PDO::FETCH_ASSOC)){

$id_item= $linha['codbarra'].'-';
$valor = $linha['valor'].'-';
$valordecusto= $linha['valordecusto'].'-';
$qtd = $linha ['total'].'<br />';

$insert = $pdo->prepare("INSERT INTO produto2 (produto_id_item,valor,valordecusto,qtd) values ('$id_item','$valor','$valordecusto','$qtd')");
$insert->execute();
}

echo "Produto da tabela inserido para Produto2 ";

?>