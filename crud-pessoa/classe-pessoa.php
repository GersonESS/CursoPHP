<?php
Class Pessoa
{
    private $pdo;
    //Conexao com banco de dados
    public function __construct($dbname, $host, $user, $senha)
    {
        try
        {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
        }
        catch(PDOException $e) {
            echo "Erro com banco de dados: ".$e->getMessage();
            exit;
        }
        catch(Exception $e){
            echo "Erro generico: ".$e->getMessage();
            exit;
        } 
    }
    // funcao para buscar dados e colocar do lado direito da tela
    public function buscarDados()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM pessoas ORDER BY nome");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

//  funcao para cadastrar Pessoa no banco
    public function cadastrarPessoa($nome, $telefone, $email)
    {
        // antes de cadastrar ver se tem o email cadastrado
        $cmd = $this->pdo->prepare("SELECT id FROM pessoas WHERE email = :e");
        $cmd->bindValue(":e",$email);
        $cmd->execute();
        if($cmd->rowCount() > 0)//email existe
            {
                return false;
            }
            else // nao foi encontrado email
             {
                $cmd = $this->pdo->prepare("INSERT INTO pessoas (nome, telefone, email) VALUES (:n, :t, :e)");
                $cmd->bindValue(":n",$nome);
                $cmd->bindValue(":t",$telefone);
                $cmd->bindValue(":e",$email);
                $cmd->execute();
                return true;
             } 
    }
   // /  funcao para excluir Pessoa
    public function excluirPessoa($id)
     {
        $cmd = $this->pdo->prepare("DELETE FROM pessoas WHERE id = :id");
        $cmd->bindValue(":id",$id);
        $cmd->execute();
     } 

                // /  funcao para
    public function buscarDadosPessoa($id)
    {   
        $res = array();                
        $cmd = $this->pdo->prepare("SELECT * FROM pessoas WHERE id = :id");
        $cmd->bindValue(":id",$id);
        $cmd->execute();
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
        // /  funcao para atualizar Dados


    public function atualizarDados($id, $nome, $telefone, $email) 
    {   
        $cmd = $this->pdo->prepare("UPDATE pessoas SET nome = :n, telefone = :t, email = :e WHERE id = :id");
        $cmd->bindValue(":n",$nome);
        $cmd->bindValue(":t",$telefone);
        $cmd->bindValue(":e",$email);
        $cmd->bindValue(":id",$id);
        $cmd->execute();    
}    
}      
?>