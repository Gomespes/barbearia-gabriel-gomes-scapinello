<?php
 $con = new PDO("mysql:host=localhost;dbname=barbearia;charset=utf8", "root", "");
//con recebe uma nova instancia PDO(conexao entre php e o banco) //usuario, senha

$sql = "select nomeCliente, nota, descricao from depoimentos";
$qry = $con->prepare($sql);
$qry->execute();

echo json_encode($qry->fetchAll(PDO::FETCH_ASSOC));