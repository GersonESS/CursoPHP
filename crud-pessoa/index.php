<?php
require_once 'classe-pessoa.php';
$p = new Pessoa("crudpdo","localhost","root","");
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
    //if(isset($_POST['email']))
    {     
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['telefone']);


        $nome     = addslashes($_POST['nome']);         
        $email    = addslashes($_POST['email']);
        $telefone = addslashes($_POST['telefone']);

            print_r($nome);
            print_r($telefone);
            print_r($email);

        if (!empty($nome) && !empty($telefone) && !empty($email) )
        {
           if(!$p->cadastrarPessoa($nome, $telefone, $email))
           {
            echo"email ja esta cadstrado";
           }
        }
        else
        {
            print_r($nome);
            print_r($telefone);
            print_r($email);
            echo "Preencha todos os campos";
        }
    }


?>
<?php

if(isset($_GET['id_up']))
{
    $id_update = addslashes($_GET['id_up']);
    $res = $p->buscarDadosPessoa($id_update);
    
}

?>

    <section id="esquerda">
        <form method="POST">
            <h2>Cadastrar Pessoa 2</h2>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome"
            value="<?php  if(isset($res)){echo $res['nome'];}?>"
        

            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone"
            value="<?php  if(isset($res)){echo $res['telefone'];}?>"
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email"
            value="<?php  if(isset($res)){echo $res['email'];}?>">
            <input type="submit" 
            value="<?php if(isset($res)){echo "Atualizar";}else{ echo "Cadastrar";} ?>">
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
        //echo "<pre>";
       // var_dump($dados);
        //echo "</pre>";
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
                ?>
                <td>
                    <?php echo $dados[$i]['id'];?>
                    <a href="index.php?id_up=<?php echo $dados[$i]['id'];?>">Editar</a>
                    <a href="index.php?id=<?php echo $dados[$i]['id'];?>">Excluir</a>
                    </td>
                    <?php
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
<?php
if(isset($_GET['id']))
{
    $id_pessoa = addslashes($_GET['id']);
    $p->excluirPessoa($id_pessoa);
    header("location: index.php");
}
?>
