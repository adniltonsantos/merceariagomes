
<?php set_time_limit(0); ?>
<?php

// Atualiza o campo codbarra para o id_item da tabela item
// referente ao codigo de barra

require_once "config.php";
$pdo = conectar();

$sql2 = $pdo->prepare("DELETE FROM produto WHERE status='vendido' OR status='pago'");
$sql2->execute();

echo "Deletado dados de produtos Vendido e Pagos";

?>