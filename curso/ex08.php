<?php
require_once 'class-pessoa.php';
$p = new Pessoa("crudpdo","localhost","root","gabibi89");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../crud-pessoa/estilo.css">
    <title>Document</title>
</head>
<body>
    <section id="esquerda">
        <form action="">
            <h2>Cadastrar Pessoa</h2>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <label for="telefone">Telefone</label>
            <input type="text" nane="telefone" id="telefone">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <input type="submit" value="Cadastrar">
        </form>       
    </section>
    <section id="direita">
    <?php
        $dados = $p->buscarDados();
        var_dump($dados)
    ?>
     <table>
         <tr id="titulo">
            <td>Nome</td>
             <td>Telefone</td>
             <td colspam="2">Email</td>
         </tr>
         <tr>
             <td>Gerson</td>
             <td>999553374</td>
             <td>gebhsantos@gmail.com</td>
             <td><a href="">Editar</a><a href="">Excluir</a></td>
         </tr>
     </table>
    </section> 
</body>
</html>