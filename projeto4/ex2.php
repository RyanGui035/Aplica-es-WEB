<?php include 'index.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
<center>

                <form method="POST" action="conversao.php">
                         <p >Cotação do dia </p>
                         <input type="text"  name="n1">
                         <p > Valor em Real</p>
                         <input type="text"  name="n1">
			             <p >Valor em Dolar </p>
 			             <input type="text"  name="n2">  <br>

                     <br>
	       		     <button type="submit" name="operacao" value="maior">
                             CONVERTER 
                        </button>
  				       		                    
                </form>        
      
</center>
</body>
</html>