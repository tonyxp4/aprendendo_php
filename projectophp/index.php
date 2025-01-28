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
       echo  "<h1>" . date("l")."</h1>";
    ?>
</nav>
<body  class="<?php echo $colorbody; ?> ">
    <ul>
        <li>
            <a href="geradorcolor.php"> <h2>lição5 (loops)</h2></a>
        </li>
        <li>
            <a href="procurar.php"> <h2>lição6 (estrutura de condição)</h2></a>
        </li>
        <li>
            <a href="grupos.php"><h2>licão8 (arrays)</h2></a>
        </li>
        <li>
            <a href="soma.php"><h2>lição9 (funções)</h2></a>
        </li>
        <li>
            <a href="login.php"><h2>lição10 (session)</h2></a>
        </li>
    </ul>
</body>
</html>