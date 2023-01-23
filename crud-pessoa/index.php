<?php
require_once 'classe-pessoa.php';
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
<?php 
        if(isset($_POST['nome']))
        {     
            $nome     = addslashes($_POST['nome']);         
            $email    = addslashes($_POST['email']);
            $telefone = addslashes($_POST['telefone']);
            if (!empty($nome) && !empty($telefone) && !empty($email) )
            {
               if(!$p->cadastrarPessoa($nome, $telefone, $email))
               {
                echo"email ja esta cadstrado";
               }
            }
            else
            {
                echo "Preencha todos os campos";
            }
        }


?>
    <section id="esquerda">
        <form method="POST">
            <h2>Cadastrar Pessoa 2</h2>
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
        <table>
            <tr id="titulo">
               <td>Nome</td>
                <td>Telefone</td>
                <td colspam="2">Email</td>
            </tr>
    <?php
        $dados = $p->buscarDados();
        if(count($dados) > 0)  //tem pessoas cadastradas
        {
            for ($i=0; $i < count($dados); $i++)
            {
                echo "<tr>";
                foreach($dados[$i] as $k => $v){
                    if($k != "id")
                    {
                        echo "<td>".$v."</td>";
                    }
                }
                ?><td><a href="">Editar</a><a href="">Excluir</a></td><?php
                echo "</tr>";
            }
        }
        else// o banco esta vasio
        {
               echo " ainda não há pessoas cadastradas";
        }
    ?>
     </table>
    </section> 
</body>
</html>
