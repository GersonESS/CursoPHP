<?php

//---------------------------------conexao
 try 
 {
     $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");
 }  
 catch(PDOException $e) {
    echo "Erro ".$e->getMessage();
 } 
 catch(Exception $e)
 {
    echo "Erro ".$e->getMessage();
 }      
        
//-----------------------INSERT-------------------------


$pdo->query("INSERT INTO pessoa (nome, telefone, email) VALUES ('Miriam-23456', '3199553374-1234', 'Miriam@dmail.com-1234')");

 ?>