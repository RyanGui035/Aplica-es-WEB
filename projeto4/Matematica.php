<?php include 'index.php'?>
<?php
class Matematica{
    public $n1, $n2, $maior, $mult;
         function maior($n1,$n2){
           if($n1>$n2){
            return $n1;
           }else {
            return $n2;
           }
        } //FIM DO MÉTODO MAIOR

         function mult($n1,$n2){
          $mult=$n1*$n2;
          return $mult;

        } // FIM DO MÉTODO MULTI

         function imprimir($resultMaior, $resultMult, $operacao){
         if($operacao=='maior')
         echo "Maior: $resultMaior<br>";

         else if($operacao=='mult')
         echo "Multiplicação: $resultMult";
         
        } // FIM DO MÉTODO IMPRIMIR

} // FIM DA CLASSE
$calc=new Matematica;
$resultMaior=$calc->maior($_POST["n1"], $_POST["n2"]);
$resultMult=$calc->mult($_POST["n1"], $_POST["n2"]);
$calc->imprimir($resultMaior, $resultMult,$_POST['operacao']);
?>