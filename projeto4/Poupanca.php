<center>
<?php include 'index.php'?>
    <!DOCTYPE html>
    <html lang="en">
         <?php

        if (isset($_POST['calcular'])) {
            $valor= isset($_POST['valor_inicial']) ? floatval($_POST['valor_inicial']) : 0;
            $juros = 0.70; 

            $rendimento = $valor * $juros;
           
            echo "<h3>Rendimento Mensal:</h3>";
            echo "<p>R$ " . number_format($rendimento, 2, ',', '.') . "</p>";
        }
        ?>
        <br>

</center>

