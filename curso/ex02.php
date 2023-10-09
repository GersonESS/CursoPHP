<?php

//---------------------------------conexao
 try 
 {
     $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");
 }  
 catch(PDOException $e) {
    echo "Erro  Com banco de dados: ".$e->getMessage();
 } 
 catch(Exception $e)
 {
    echo "Erro  generico: ".$e->getMessage();
 }      
        
//-----------------------INSERT-------------------------


$res = $pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
$res->bindValue(":n" ,"Pedro Aniversariante");
$res->bindValue(":t" ,"31988334336");
$res->bindValue(":e" ,"pe@dmail.com");
$res->execute();

$res = $pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
$res->bindValue(":n" ,"Gabibi dos santos");
$res->bindValue(":t" ,"31986625634");
$res->bindValue(":e" ,"bi@gmail.com");
$res->execute();


// $cmd = $pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
//                 $cmd->bindValue(":n",$nome);
//                 $cmd->bindValue(":t",$telefone);
//                 $cmd->bindValue(":e",$email);
//                 $cmd->execute();



 ?>