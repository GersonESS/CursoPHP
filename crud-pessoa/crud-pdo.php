<?php
// ------------------------CONEXAO-----------------------------------
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = ''; 
    $dbname = 'CRUDPDO';

    $pdo = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);
    if($pdo->connect_errno){
        echo "Erro na Conexao";
    }
    else
    {
        echo "Conexao realizada com sucesso";
    }
    
    $testConnection = new Connect();

 // ------------------------insert-----------------------------------
 // ----PHP PDO 2/10 (INSERT)
 // ------------------------delete e update-----------------------------------
 // --PHP PDO 3/10 (DELETE E UPDATE)
// -----------------------------------------------------------

     
?> 