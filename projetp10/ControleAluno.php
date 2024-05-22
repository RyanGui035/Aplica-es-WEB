<!-- ControleAluno.php  -->
<?php require_once "classAluno.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classAlunoDAO.php"; ?>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$curso = $_POST['curso'];   
$turno = $_POST['turno'];

$novoAluno = new ClassAluno();     
$novoAluno -> setNome($nome);  
$novoAluno -> setEmail($email);
$novoAluno -> setCurso($curso);
$novoAluno -> setTurno($turno);

$classAlunoDAO = new ClassAlunoDAO();
$classAlunoDAO -> cadastrarAluno ($novoAluno);

?>