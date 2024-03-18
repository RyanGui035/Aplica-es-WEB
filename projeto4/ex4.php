<?php include 'index.php'?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Custo ao consumidor</title>
</head>
<body>
    <center>
        <h1>Cálculo do custo ao consumidor</h1>
        <form method="POST" action="Carros.php">
            <p>Custo de fábrica do carro:</p>
            <input type="text" name="custo_fabrica" >
            <br><br>
            <button type="submit" name="calcular">Calcular</button>
        </form>
    </center>
</body>
</html>
