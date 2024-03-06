
<?php 
//Classe 
//Tem que ser em letra maiuscula e tem que ser o nome do arquivo
   class CalculadoraRecebe { 
// Atributos/Variáveis
   public $numero1;  
   public $numero2;
   public $acao;
   public $resultado;
//Métodos (AÇÃO)
   function calcular($numero1,$numero2,$acao){
                    if (is_numeric($numero1) && is_numeric($numero2)){

                    if($acao=="somar"){
                        $resultado=$numero1+$numero2;
                        echo  "<center><h1> RESULTADO DA SOMA = $resultado </h1> </center>";
                    }
                    else if($acao=="subtrair"){
                        $resultado=$numero1-$numero2;
                        echo  "<center><h1> RESULTADO DA SUBTRAÇÃO = $resultado </h1> </center>";
                    }
                    else if($acao=="multiplicar"){
                        $resultado=$numero1*$numero2;
                        echo  "<center><h1> RESULTADO DA MULTIPLICAÇÃO = $resultado </h1> </center>";
                    }
                    else if($acao=="dividir"){
                        $resultado=$numero1/$numero2;
                        echo  "<center><h1> RESULTADO DA DIVISÃO = $resultado </h1> </center>";
                    }
                }else {
                echo "Digite somente números"; }
                    
     }//FIM DO MÉTODO
}//FIM DA CLASSE

// Objeto
$calc=new CalculadoraRecebe;
$calc->calcular($_POST["numero1"],
                $_POST["numero2"],
                $_POST["acao"]);
?>