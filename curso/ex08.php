<?php
if(isset($_POST['submit']))
{
    print_r($_POST['nome']);
    print_r($_POST['telefone']);
    print_r($_POST['email']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <section id="esquerda">
        <form action="ex08.php" method="POST">
            <h2>Cadastrar Pessoa</h2>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            <!-- <input type="submit" value="submit" id="submit"> -->
            <input type="submit" name="submit" id="submit">
        </form>       
    </section>
    <section id="direita">
   
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
