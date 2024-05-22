<!-- alterarProcessaAluno.php -->

<?php require_once "classAluno.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classAlunoDAO.php"; ?>
<?php 
$id = $_GET['id'];
$nome = $_GET['nome'];
$email = $_GET['email'];
$curso = $_GET['curso'];   
$turno = $_GET['turno'];

$ClassAlunoDAO = new ClassAlunoDAO();
$novoAluno = new ClassAluno();  

$novoAluno->setId($id);  
$novoAluno->setNome($nome);  
$novoAluno->setEmail($email);
$novoAluno->setCurso($curso);
$novoAluno->setTurno($turno);

$array = $ClassAlunoDAO->alterarAluno($novoAluno);
if($array==TRUE){
    header('Location: listarAluno.php');
}else{
    echo "Erro";
}
?>