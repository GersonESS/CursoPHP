<?php
 try 
 {
     $pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");
 }  
 catch(PDOException $e) {
    echo "Erro Com banco de dados: ".$e->getMessage();
 } 
 catch(Exception $e)
 {
    echo "Erro generico: ".$e->getMessage();
 }      
        




//  $pdo = ->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
// = $pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
// $cmd->bindValue(":n" ,"Miriam");
// $cmd->bindValue(":t" ,"3199553374");
// $cmd->bindValue(":e" ,"Miriam@dmail.com");
// $cmd->execute();
 ?>