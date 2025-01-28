<?php
 session_start();
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
       echo  "<h1>" . date("H") . ":" . date("i") . "</h1>";
    ?>
</nav>
<body class="<?php echo $colorbody; ?>">
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
    <form action="procurar.php" method="post">
        <h1>Ache o ladrão</h1>
        <h3>O ladrão está escondido em uma das caixas da loja, correspondente a um número de 0 a 100.</h3>
        <input type="number" name="numero" placeholder="Digite a quantidade">
        <input type="submit" name="submit">
    </form>

    <?php
    //verificar se ja tem sessão
    if (!isset($_SESSION['numero_aleatorio']))
    {
        $_SESSION['numero_aleatorio'] = rand(0, 100);
    }
    if (isset($_POST['submit']) && isset($_POST['numero'])) {
        $num = intval($_POST['numero']);
        $r = $_SESSION['numero_aleatorio'];
        //se o valor do usuario for o mesmo que o rand
        if ($num == $r) {
            echo "Parabéns, você achou o ladrão que estava na caixa número " . $r . " da loja!";
            session_destroy();
        }
        //se o valor do usuario for menor que o rand
        else if ($num < $r) {
            echo "Não esta aqui na caixa numero ". $num."! Vai mais para cima!<br>";
        }
        //se o valor do usuario for maior que o rand
        else if ($num > $r)
        {
            echo "Não esta aqui na caixa numero ". $num."! Vai mais para baixo!<br>";
        }
    }
    ?>
    <img class="caixa" src="ftos/man-parcel-boxes.jpg" alt="">
    <a href="index.php"><h2>sair</h2></a>
</body>
</html>
