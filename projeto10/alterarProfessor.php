<!-- alterarProfessor.php -->

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

$novoProfessor -> setId($id);  
$novoProfessor -> setNome($nome);  
$novoProfessor -> setEmail($email);
$novoProfessor -> setSalario($salario);
$novoProfessor -> setNivel($nivel);

?>

<body>
     <center>
        <form action=alterarProcessaProfessor.php method=GET>
        <h1> ALTERAR DADOS </h1>
        Id: <br><input type=text name="id"readonly=true value=<?php echo $novoProfessor->getId($id); ?>><br>
        Nome: <br><input type=text name="nome" value=<?php echo $novoProfessor->getNome($nome); ?>><br>
        Email: <br><input type=text name="email" value=<?php echo $novoProfessor->getEmail($email); ?>><br>
        Salário: <br><input type=text name="salario" value=<?php echo $novoProfessor->getSalario($salario); ?>><br>
        Nível: <br><input type=text name="nivel" value=<?php echo $novoProfessor->getNivel($nivel); ?>><br>
        <br><br>

        <button type=submit class="btn btn-primary">ALTERAR</button>
</form>
     <center>
    </body>