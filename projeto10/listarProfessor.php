<!-- listarProfessor.php -->

<?php require_once "classProfessor.php" ?> <!--  //Métodos GET e SET -->
<?php require_once "classProfessorDAO.php" ?>

<?php

$ClassProfessorDAO = new ClassProfessorDAO();
$array = $ClassProfessorDAO -> listarProfessor();

echo "<center><h3>RESULTADO </h3></center>";
	echo "<center>";
    echo "<table border=1>";
    echo "  <tr>";
    echo "      <th>Id </th> ";
    echo "      <th>Nome      </th> ";
	echo "      <th>Email  </th> ";
    echo "      <th>Salário   </th>";
	echo "      <th>Nível   </th> ";
    echo "      <th>Excluir   </th> ";
    echo "      <th>Alterar   </th>";
    echo "  </th>";
	echo "</center>";   
foreach ($array as $array){
echo "<tr>";
    echo "<td>".$array ['id'] . "</td> ";
    echo "<td>".$array ['nome'] . "</td> ";
    echo "<td>".$array ['email'] . "</td> ";
    echo "<td>".$array ['salario'] . "</td> ";
    echo "<td>".$array ['nivel'] . "</td> ";
    echo "<td>";
?>
<center> <form action="excluirProfessor.php" method="GET" style="position:relative; top: 8px">
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
<form action="alterarProfessor.php" method="GET"style="position:relative; top: 8px" >
    <input type=hidden name=id
    value=<?php echo $array['id']?>>
    <button>
        <img src='imgALTERAR.png' 
        width="30px" height="30px">
</form>
<?php
echo "</td>";
}


// <!-- echo"<td><center><a href='#'><img src=''</a></td>";
//     echo"<td><center><a href='#'><img src=''</a></td>"; -->