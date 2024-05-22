<!-- alterarAluno.php -->

<?php require_once "classAluno.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classAlunoDAO.php"; ?>

<?php
$id = $_GET['id'];
$nome = $_GET['nome'];
$email = $_GET['email'];
$curso = $_GET['curso'];   
$turno = $_GET['turno'];

$ClassAlunoDAO = new ClassAlunoDAO();
$novoAluno = new ClassAluno();   

$novoAluno -> setId($id);  
$novoAluno -> setNome($nome);
$novoAluno -> setEmail($email);
$novoAluno -> setCurso($curso);
$novoAluno -> setTurno($turno);

?>
<body>
     <center>
        <form action=alterarProcessaAluno.php method=GET>
        <h1> ALTERAR DADOS </h1>
        Id: <br><input type=text name="id"readonly=true value=<?php echo $novoAluno->getId($id); ?>><br>
        Nome: <br><input type=text name="nome" value=<?php echo $novoAluno->getNome($nome); ?>><br>
        Email: <br><input type=text name="email" value=<?php echo $novoAluno->getEmail($email); ?>><br>
        Curso: <br><input type=text name="curso" value=<?php echo $novoAluno->getCurso($curso); ?>><br>
        Turno: <br><input type=text name="turno" value=<?php echo $novoAluno->getTurno($turno); ?>><br>
        <br><br>

        <button type=submit class="btn btn-primary">ALTERAR</button>
</form>
     <center>
    </body>