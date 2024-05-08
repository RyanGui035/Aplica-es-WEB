<!-- ClassProfessorDAO.php -->

<?php require_once "Conexao.php"; ?>
<?php
class ClassProfessorDAO {
    public function cadastrarProfessor($novoProfessor){
        try{
        $pdo = Conexao::getInstance();
        $sql = "INSERT INTO professores(nome, email, salario, nivel) VALUES (?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(1, $novoProfessor->getNome());
        $stmt->bindValue(2, $novoProfessor->getEmail());
        $stmt->bindValue(3, $novoProfessor->getSalario());
        $stmt->bindValue(4, $novoProfessor->getNivel());
        $stmt->execute();
    echo "<center><h1>Cadastro realizado com sucesso</h1></center><br>";
    echo "<br><a href='listarProfessor.php'>Listar</a>";
    }catch(PDOException $erro) {
        echo $erro->getMessage();
    }
  } //fechamento do método cadastrarProfessor

public function listarProfessor(){

    try{
        $pdo = Conexao::getInstance();
        $sql = "SELECT * FROM professores";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $erro) {
                echo $erro->getMessage();
            }
      }
      public function excluirProfessor($novoProfessor){
        try{
        $pdo = Conexao::getInstance();
        $sql = "DELETE FROM professores WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id', $novoProfessor->getId());
        $stmt->execute();
        return true;
    }catch(PDOException $erro) {
        echo $erro->getMessage();
    }
  } //fechamento do método cadastrarProfessor
}//fim da Classe

