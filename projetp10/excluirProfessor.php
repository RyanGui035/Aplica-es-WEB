<!-- excluirProfessor.php -->

<?php require_once "classProfessor.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classProfessorDAO.php" ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $novoProfessor = new ClassProfessor();   
    $novoProfessor -> setId($id);  

    $ClassProfessorDAO = new ClassProfessorDAO();
    $ClassProfessorDAO -> excluirProfessor ($novoProfessor);

    $array = $ClassProfessorDAO->excluirProfessor ($novoProfessor);
    if ($array==TRUE){
        header('Location: listarProfessor.php');
    }else{
        echo "Erro";
    }
}
?>