<!-- alterarProcessaDisciplina.php -->

<?php require_once "classDisciplina.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classDisciplinaDAO.php"; ?>
<?php 
$id = $_GET['id'];
$disciplina = $_GET['disciplina'];
$dias = $_GET['dias'];

$ClassDisciplinaDAO = new ClassDisciplinaDAO();
$novoDisciplina = new ClassDisciplina();  

$novoDisciplina->setId($id);  
$novoDisciplina->setDisciplina($disciplina);  
$novoDisciplina->setDias($dias);

$array = $ClassDisciplinaDAO->alterarDisciplina($novoDisciplina);
if($array==TRUE){
    header('Location: listarDisciplina.php');
}else{
    echo "Erro";
}
?>