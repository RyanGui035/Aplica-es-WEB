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
    echo "<br><a href='listar.php'>Listar</a>";
    }catch(PDOException $erro) {
        echo $erro->getMessage();
    }
  } //fechamento do método cadastrarAluno
}//fim da Classe

