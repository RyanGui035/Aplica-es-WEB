<!-- alterarDisciplina.php -->

<?php require_once "classDisciplina.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classDisciplinaDAO.php"; ?>

<?php
$id = $_GET['id'];
$disciplina = $_GET['disciplina'];
$dias = $_GET['dias'];

$ClassDisciplinaDAO = new ClassDisciplinaDAO();
$novoDisciplina = new ClassDisciplina();   

$novoDisciplina -> setId($id);  
$novoDisciplina -> setDisciplina($disciplina);
$novoDisciplina -> setDias($dias);


?>
<body>
     <center>
        <form action=alterarProcessaDisciplina.php method=GET>
        <h1> ALTERAR DADOS </h1>
        Id: <br><input type=text name="id"readonly=true value=<?php echo $novoDisciplina->getId($id); ?>><br>
        Disciplinas: <br><input type=text name="disciplina" value=<?php echo $novoDisciplina->getDisciplina($disciplina); ?>><br>
        Dias: <br><input type=text name="dias" value=<?php echo $novoDisciplina->getDias($dias); ?>><br>
        <br><br>

        <button type=submit class="btn btn-primary">ALTERAR</button>
</form>
     <center>
    </body>