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


$pdo->query("INSERT INTO pessoa (nome, telefone, email) VALUES ('Miriam-1', '3199553374-1', 'Miriam@dmail.com-1')");

 ?>