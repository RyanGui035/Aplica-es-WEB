<!-- excluirAluno.php -->

<?php require_once "classAluno.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classAlunoDAO.php" ?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $novoAluno = new ClassAluno();   
    $novoAluno -> setId($id);  

    $ClassAlunoDAO = new ClassAlunoDAO();
    $ClassAlunoDAO -> excluirAluno ($novoAluno);

    $array = $ClassAlunoDAO -> excluirAluno ($novoAluno);
    if ($array==TRUE){
        header('Location: listarAluno.php');
    }else{
        echo "Erro";
    }
}
?>