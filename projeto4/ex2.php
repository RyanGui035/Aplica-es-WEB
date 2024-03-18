<?php include 'index.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>
<body>
<center>

    
<h1>Conversão de dólar para real</h1>

<form method="POST" action="conversao.php">

        <p>Cotação do dólar do dia:</p>
        <input type="text" name="n1">
        
        <p>Quantidade de Dólares:</p>
        <input type="text" name="n2"> <br><br>

        <button type="submit" name="operacao" value="mult">
            CONVERTER 

        </button>
    </form>        
</center>
</body>
</html>
