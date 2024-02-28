<?php 


$nome=$_GET["nome"];
$email=$_GET["email"];
$mensagem=$_GET["mensagem"];
$sexo=$_GET["sexo"];

echo "NOME: $nome <br>";
echo "EMAIL: $email <br>";
echo "MENSAGEM: $mensagem <br>";
echo "SEXO: $sexo <br>";

if(isset($_GET["curso"])){
    $curso=$_GET["curso"];
    foreach($curso as $item){
        echo "CURSO: $item <br>";
}
}


?>
