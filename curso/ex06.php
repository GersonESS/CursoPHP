<?php  
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
$cmd = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
$cmd->bindValue(":id",2);
$cmd->execute();
$res = $cmd->fetch(PDO::FETCH_ASSOC); 
echo "<pre>";
//print_r($res);
foreach ($res as $key => $value){
   echo $key.":".$value."<br>";
}
echo "</pre>";
?>