<?php

$nomeCliente = $_GET['nomeCliente'];
$nomeServico = $_GET['nomeServico'];
$valor = $_GET['valor'];
$situacao = $_GET['situacao'];

$con = new PDO("mysql:host=localhost;dbname=barbearia;charset=utf8", "root", "");

$sql = "insert into orcamentos (nomeCliente, nomeServico, valor, situacao) 
        values (:nomeCliente, :nomeServico, :valor, :situacao)";

$qry = $con->prepare($sql);
$qry->bindParam(":nomeCliente", $nomeCliente, PDO::PARAM_STR);
$qry->bindParam(":nomeServico", $nomeServico, PDO::PARAM_STR);
$qry->bindParam(":valor", $valor, PDO::PARAM_STR);
$qry->bindParam(":situacao", $situacao, PDO::PARAM_STR);

$qry->execute();
?>
