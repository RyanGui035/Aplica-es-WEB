    <?php include 'index.php'?>
    <!DOCTYPE html>
    <html lang="en">
        <title>Custo ao Consumidor</title>
    </head>
    <body>
        <center>
            <h1>Resultado do cálculo</h1>
            <?php
            if (isset($_POST['calcular'])) {
                $custoFab = isset($_POST['custo_fabrica']) ? floatval($_POST['custo_fabrica']) : 0;
                
                $percDist = 0.28;
                $impostos = 0.45;

                $valorDist = $custoFab * $percDist;
                $valorImp = $custoFab * $impostos;
                $custoCons = $custoFab + $valorDist + $valorImp;

                echo "<h3>Custo ao Consumidor:</h3>";
                echo "<p>R$ " . number_format($custoCons, 2, ',', '.') . "</p>";
            }
            ?>
            <br>
        </center>
    
