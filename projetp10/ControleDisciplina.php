<!-- ControleDisciplina.php  -->
<?php require_once "classDisciplina.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classDisciplinaDAO.php"; ?>
<?php
$disciplina = $_POST['disciplina'];
$dias = $_POST['dias'];

$novoDisciplina = new ClassDisciplina();   
$novoDisciplina -> setDisciplina($disciplina);  
$novoDisciplina -> setDias($dias);

$ClassDisciplinaDAO = new ClassDisciplinaDAO();
$ClassDisciplinaDAO -> cadastrarDisciplina ($novoDisciplina);

?>