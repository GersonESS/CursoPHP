<?php

//---------------------------------conexao
 try 
 {
     $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","gabibi89");
 }  
 catch(PDOException $e) {
    echo "Erro ".$e->getMessage();
 } 
 catch(Exception $e)
 {
    echo "Erro ".$e->getMessage();
 }      
        
//-----------------------INSERT-------------------------


$res = $pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
$res->bindValue(":n" ,"Pedro dos santos");
$res->bindValue(":t" ,"3199553374=2");
$res->bindValue(":e" ,"santos@dmail.com-2");
$res->execute();

$res = $pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
$res->bindValue(":n" ,"Miriam-2 dos santos");
$res->bindValue(":t" ,"3199553374=2");
$res->bindValue(":e" ,"Mir@dmail.com-2");
$res->execute();


// $cmd = $pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
//                 $cmd->bindValue(":n",$nome);
//                 $cmd->bindValue(":t",$telefone);
//                 $cmd->bindValue(":e",$email);
//                 $cmd->execute();



 ?>