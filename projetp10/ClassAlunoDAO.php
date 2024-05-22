<!-- ClassAlunoDAO.php -->

<?php require_once "Conexao.php"; ?>
<?php
class classAlunoDAO {
    public function cadastrarAluno($novoAluno){
        try{
        $pdo = Conexao::getInstance();
        $sql = "INSERT INTO alunos(nome, email, curso, turno) VALUES (?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $novoAluno->getNome());
        $stmt->bindValue(2, $novoAluno->getEmail());
        $stmt->bindValue(3, $novoAluno->getCurso());
        $stmt->bindValue(4, $novoAluno->getTurno());
        $stmt->execute();
    echo "<center><h1>Cadastro realizado com sucesso</h1></center><br>";
    echo "<br><a href='listarAluno.php'>Listar</a>";
    }catch(PDOException $erro) {
        echo $erro->getMessage();
    }
}

    public function listarAluno(){

        try{
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM alunos";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
                return $stmt->fetchAll();
            }catch(PDOException $erro) {
                    echo $erro->getMessage();
                }
          }
          public function excluirAluno($novoAluno){
            try{
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM alunos WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $novoAluno->getId());
            $stmt->execute();
            return true;
        }catch(PDOException $erro) {
            echo $erro->getMessage();
        }
    }
    public function alterarAluno($novoAluno){
        try{
            $pdo = Conexao::getInstance();
            $sql = "UPDATE alunos SET nome=:nome, email=:email, curso=:curso, turno=:turno WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $novoAluno->getId());
            $stmt->bindValue(':nome', $novoAluno->getNome());
            $stmt->bindValue(':email', $novoAluno->getEmail());
            $stmt->bindValue(':curso', $novoAluno->getCurso());
            $stmt->bindValue(':turno', $novoAluno->getTurno());
            $stmt->execute();
            return true;
            }catch(PDOException $erro) {
            echo $erro->getMessage();
    
    }

  } //fechamento do método cadastrarAluno
  
}//fim da Classe

