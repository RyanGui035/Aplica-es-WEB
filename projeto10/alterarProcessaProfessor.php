<!-- alterarProcessaProfessor.php -->

<?php require_once "classProfessor.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classProfessorDAO.php"; ?>
<?php
$id = $_GET['id'];
$nome = $_GET['nome'];
$email = $_GET['email'];
$salario = $_GET['salario'];   
$nivel = $_GET['nivel'];

$ClassProfessorDAO = new ClassProfessorDAO();
$novoProfessor = new ClassProfessor();  

$novoProfessor->setId($id);  
$novoProfessor->setNome($nome);  
$novoProfessor->setEmail($email);
$novoProfessor->setSalario($salario);
$novoProfessor->setNivel($nivel);

$array = $ClassProfessorDAO->alterarProfessor($novoProfessor);
if($array==TRUE){
    header('Location: listarProfessor.php');
}else{
    echo "Erro";
}
?>