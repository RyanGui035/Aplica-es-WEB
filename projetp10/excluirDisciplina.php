<!-- excluirDisciplina.php -->

<?php require_once "classDisciplina.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classDisciplinaDAO.php" ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $novoDisciplina = new ClassDisciplina();   
    $novoDisciplina -> setId($id);  

    $ClassDisciplinaDAO = new ClassDisciplinaDAO();
    $ClassDisciplinaDAO -> excluirDisciplina ($novoDisciplina);

    $array = $ClassDisciplinaDAO->excluirDisciplina ($novoDisciplina);
    if ($array==TRUE){
        header('Location: listarDisciplina.php');
    }else{
        echo "Erro";
    }
}
?>