<!-- validaCadastro.php -->
<?php require_once "conecta.php" ?>

<?php

$login= $_POST['login'];
$senha= $_POST['senha'];

inserir($conexao,$login,$senha);

function inserir($conexao,$login,$senha){
    $sql = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
   
   if (mysqli_query($conexao,$sql)){
    echo 'Adicionado';
    //header("Location:.../index.php");
   }
else{
    $erro= mysqli_error($conexao);
    echo "Não adicionado";
    echo $erro;
}

}

?>