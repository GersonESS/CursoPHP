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
        
//-----------------------DELETE e update-------------------------

// $cmd = $pdo->prepare("DELETE FROM pessoa WHERE id = :id)");
// $id = 4;
// $cmd->bindValue(":id","$id");



// $cmd->execute();

$cmd = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :id");

$cmd->bindValue(":e","g@gmail.com");
$cmd->bindValue(":id",4);
$cmd->execute();










?>