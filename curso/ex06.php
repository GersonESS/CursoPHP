<?php

$cmd = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
$cmd->bindValue(":id",4);
$cmd->execute();
$res = $cmd->fetch(); 
print_r($res)


?>