<?php


$cmd = #pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n, :t, :e)");
$cmd->bindValue(":n" ,"Miriam");
$cmd->bindValue(":t" ,"3199553374");
$cmd->bindValue(":e" ,"Miriam@dmail.com");
$cmd->execute();
?>