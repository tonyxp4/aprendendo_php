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
       echo  "<h1>" . date("H") .":". date("i")."</h1>";
    ?>
</nav>
<body  class="<?php echo $colorbody; ?> ">
    <form action="geradorcolor.php" method="post">
        <h1>Gerador de cores</h1>
        <input type="number" name="numero" placeholder= "digite a quantidade de cor">
        <input type="submit" name="submit">
    </form>
    <?php
if (isset($_POST['submit'])) {
    $numDivs = intval($_POST['numero']);
    if($numDivs == 0)
    {
        echo "o numero não pode ser 0 ";
    }
    else if($numDivs > 255)
    {
        echo "o numero não pode ser maior que 255 ";
    }
    else{
        //gerar divs aletorias
    for ($i = 0; $i < $numDivs; $i++)
    {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);

        $rgbColor = "rgb($r, $g, $b)";
        echo '<div style="width: 100px; height: 100px; background-color: ' . $rgbColor . '; margin: 5px; display: inline-block;"></div>';
        echo '<h3">' . $rgbColor . '</h3>';
    }
}
}
?>
<a href="index.php"><h2>sair</h2></a>
</body>
</html>