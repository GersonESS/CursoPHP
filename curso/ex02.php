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
$res->bindValue(":n" ,"Miriam");
$res->bindValue(":t" ,"3199553374");
$res->bindValue(":e" ,"Miriam@dmail.com");
$res->execute();

 ?>