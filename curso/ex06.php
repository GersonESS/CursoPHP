<?php

$cmd = $pdo("SELECT * FROM pessoa");
$cmd->bindValue(":id",4);
$cmd->execute();
$res = $cmd->fetch(); 
print_r($res)


?>