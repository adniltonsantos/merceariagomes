<?php 

function conectar(){

try{
$pdo=new PDO ("mysql:host=localhost;dbname=merceariagomes;charset=utf8","merceariagomes","merceariagomespwd");
}catch (PDOexception $e){
	echo $e ->getMessage();
}

return $pdo;
	
}

?>