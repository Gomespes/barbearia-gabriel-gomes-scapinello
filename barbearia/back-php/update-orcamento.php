<?php

$codigo = $_GET['codigo'];
$situacao = $_GET['situacao'];

$con = new PDO("mysql:host=localhost;dbname=barbearia;charset=utf8", "root", "");

$sql = "UPDATE orcamentos SET situacao = :situacao WHERE
codigo = :codigo";

$qry = $con->prepare($sql);
$qry->bindParam(":codigo", $codigo, PDO::PARAM_STR);
$qry->bindParam(":situacao", $situacao, PDO::PARAM_STR);

$qry->execute();
?>
