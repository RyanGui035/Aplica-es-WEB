<center>
<?php include 'index.php'?>
    <!DOCTYPE html>
    <html lang="en">
<?php
class conversao{
    public $n1, $n2, $mult;

    function mult($n1, $n2){
        $mult = $n1 * $n2;
        return $mult;
    }

    function imprimir($resultMult, $operacao){
        if ($operacao == 'mult') {
            echo "Resultado: $resultMult";
        }
    }
}

if (isset($_POST['operacao'])) {
    
    $calc = new conversao;
    $resultMult = $calc->mult($_POST["n1"], $_POST["n2"]);
    $calc->imprimir($resultMult, $_POST['operacao']);
}
?>
</center>
