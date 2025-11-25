<?php

$codigo = $_GET['codigo'];

$con = new PDO("mysql:host=localhost;dbname=barbearia;charset=utf8", "root", "");

$sql = "UPDATE depoimentos SET curtidas = curtidas + 1 WHERE codigo = :codigo";
$qry = $con->prepare($sql);
$qry->bindParam(":codigo", $codigo, PDO::PARAM_STR);
$qry->execute();