<!-- listarAluno.php -->

<?php require_once "classAluno.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classAlunoDAO.php" ?>

<?php

$ClassProfessorDAO = new ClassAlunoDAO();
$array = $ClassAlunoDAO -> listarAluno();

echo "<center><h3>RESULTADO </h3></center>";
	echo "<center>";
    echo "<table border=1>";
    echo "  <tr>";
    echo "      <th>Id </th> ";
    echo "      <th>Nome      </th> ";
	echo "      <th>Email  </th> ";
    echo "      <th>Curso   </th>";
	echo "      <th>Turno   </th> ";
    echo "  </th>";
	echo "</center>";   
foreach ($array as $array){
echo "<tr>";
    echo "<td>".$array ['id'] . "</td> ";
    echo "<td>".$array ['nome'] . "</td> ";
    echo "<td>".$array ['email'] . "</td> ";
    echo "<td>".$array ['curso'] . "</td> ";
    echo "<td>".$array ['turno'] . "</td> ";
    echo "<td>";
?>
<center> <form action="excluirAluno.php" method="GET" style="position:relative; top: 8px">
    <input type=hidden name=id
    value=<?php echo $array['id']?>>
    <button>
        <img src='imgLIXEIRA.png' 
        width="30px" height="30px">
</form>
<?php
echo "</td>";
echo "<td>";
?>
<form action="alterarAluno.php" method="GET"style="position:relative; top: 8px" >
    <input type=hidden name=id
    value=<?php echo $array['id']?>>
    <button>
        <img src='imgALTERAR.png' 
        width="30px" height="30px">
</form>
<?php
echo "</td>";
}
