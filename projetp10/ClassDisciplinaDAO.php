<!-- ClassDisciplinaDAO.php -->

<?php require_once "Conexao.php"; ?>
<?php
class classDisciplinaDAO {
    public function cadastrarDisciplina($novoDisciplina){
        try{
        $pdo = Conexao::getInstance();
        $sql = "INSERT INTO disciplina(disciplinas, dias) VALUES (?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $novoDisciplina->getDisciplina());
        $stmt->bindValue(2, $novoDisciplina->getDias());
        $stmt->execute();
    echo "<center><h1>Cadastro realizado com sucesso</h1></center><br>";
    echo "<br><a href='listarDisciplina.php'>Listar</a>";
    }catch(PDOException $erro) {
        echo $erro->getMessage();
    }
}

    public function listarDisciplina(){

        try{
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM disciplina";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
                return $stmt->fetchAll();
            }catch(PDOException $erro) {
                    echo $erro->getMessage();
                }
          }
          public function excluirDisciplina($novoDisciplina){
            try{
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM disciplina WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $novoDisciplina->getId());
            $stmt->execute();
            return true;
        }catch(PDOException $erro) {
            echo $erro->getMessage();
        }
    }
    public function alterarDisciplina($novoDisciplina){
        try{
            $pdo = Conexao::getInstance();
            $sql = "UPDATE disciplina SET disciplinas=:disciplinas, dias=:dias WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':id', $novoDisciplina->getId());
            $stmt->bindValue(':disciplinas', $novoDisciplina->getDisciplina());
            $stmt->bindValue(':dias', $novoDisciplina->getDias());
            $stmt->execute();
            return true;
            }catch(PDOException $erro) {
            echo $erro->getMessage();
    
    }

  } //fechamento do método cadastrarDisciplina
  
}//fim da Classe

