<?php

$nomeCliente = $_GET['nomeCliente'];
$nota = $_GET['nota'];
$descricao = $_GET['descricao'];

$con = new PDO("mysql:host=localhost;dbname=barbearia;charset=utf8", "root", "");

$sql = "insert into depoimentos (nomeCliente, nota, descricao) values (:nomeCliente, :nota, :descricao)";
$qry = $con->prepare($sql);
$qry->bindParam(":nomeCliente", $nomeCliente, PDO::PARAM_STR);
$qry->bindParam(":nota", $nota, PDO::PARAM_STR);
$qry->bindParam(":descricao", $descricao, PDO::PARAM_STR);
$qry->execute();