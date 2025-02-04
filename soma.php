<?php
    $semana = date("w");
    if($semana == 6 || $semana == 0)
    {
        $colorbody = "fimdesemana";
    }else
    {
        $colorbody = "semanas";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lendasdophp</title>
</head>
<nav>
    <?php
       echo  "<h1>  Ano de 20" . date("y")."</h1>";
    ?>
</nav>
<body  class="<?php echo $colorbody; ?> ">
    <?php
$hora = date("H");

switch ($hora)
{
    case ($hora < 12):
        echo "<h2>Bom dia!</h2>";
        break;
    case ($hora >= 12 && $hora < 18):
        echo "<h2>Boa tarde!</h2>";
        break;
    default:
        echo "<h2>Boa noite!</h2>";
        break;
}
?>
<div class="container">
 
    <form class="formsoma" method="POST">
           <h2 class="h2soma">Calculadora de Soma</h2>
        <input type="number" name="num1" placeholder="Digite o primeiro número" required>
        <input type="number" name="num2" placeholder="Digite o segundo número" required>
        <input type="submit" value="Somar">
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Pegando os valores dos inputs
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Função que soma os dois números
        function soma($a, $b)
        {
            return $a + $b;
        }

        // Calculando o resultado
        $resultado = soma($num1, $num2);

        // Exibindo o resultado
    
        echo "<div class='result'>";
        echo "Resultado: $num1 + $num2 = $resultado";
        echo "</div>";
    }
    ?>
        <a href="index.php"><h2>sair</h2></a>
    </form>
</div>
</body>
</html>