<?php
 $con = new PDO("mysql:host=localhost;dbname=barbearia;charset=utf8", "root", "");
//con recebe uma nova instancia PDO(conexao entre php e o banco) //usuario, senha

$sql = "select * from orcamentos"; //variavel recebendo um comando do sql (uma query)
$qry = $con->prepare($sql);  //variavel qry recebendo a conexao con.prepare(sql)
$qry->execute(); //qry.execute()

//$nr = $qry->rowCount(); //"conta linhas/registros"
//echo $nr;

$registros = $qry->fetchAll(PDO::FETCH_OBJ);
echo json_encode($registros);