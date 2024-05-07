<!-- ControleProfessor.php  -->
<?php require_once "classProfessor.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classProfessorDAO.php"; ?>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$salario = $_POST['salario'];   
$nivel = $_POST['nivel'];

$novoProfessor = new ClassProfessor();   
$novoProfessor -> setNome($nome);  
$novoProfessor -> setEmail($email);
$novoProfessor -> setSalario($salario);
$novoProfessor -> setNivel($nivel);

$ClassProfessorDAO = new ClassProfessorDAO();
$ClassProfessorDAO -> cadastrarProfessor ($novoProfessor);

?>