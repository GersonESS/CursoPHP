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

$cmd = $pdo->prepare("DELETE FROM pessoa WHERE id = :îd)");
$id = 3;
$cmd->bindValue(":id", $id);
$cmd->execute();
 ?>