<!-- listarDisciplina.php -->

<?php require_once "classDisciplina.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classDisciplinaDAO.php" ?>

<?php

$ClassDisciplinaDAO = new ClassDisciplinaDAO();
$array = $ClassDisciplinaDAO -> listarDisciplina();

echo "<center><h3>RESULTADO </h3></center>";
	echo "<center>";
    echo "<table border=1>";
    echo "  <tr>";
    echo "      <th>Id </th> ";
    echo "      <th>Disciplina      </th> ";
	echo "      <th>Dias  </th> ";
    echo "      <th>Excluir   </th> ";
    echo "      <th>Alterar   </th>";
    echo "  </th>";
	echo "</center>";   
foreach ($array as $array){
echo "<tr>";
    echo "<td>".$array ['id'] . "</td> ";
    echo "<td>".$array ['disciplinas'] . "</td> ";
    echo "<td>".$array ['dias'] . "</td> ";
    echo "<td>";
?>
<center> <form action="excluirDisciplina.php" method="GET" style="position:relative; top: 8px">
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
<form action="alterarDisciplina.php" method="GET"style="position:relative; top: 8px" >
    <input type=hidden name=id
    value=<?php echo $array['id']?>> 

    <input type=hidden name=disciplina
    value=<?php echo $array['disciplinas']?>> 

    <input type=hidden name=dias
    value=<?php echo $array['dias']?>>

    <button>
        <img src='imgALTERAR.png' 
        width="30px" height="30px">
</form>
<?php
echo "</td>";
}
