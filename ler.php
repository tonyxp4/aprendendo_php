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
<form action="ler.php" method="post">
        <h1>mostrar conteudo do arquivo</h1>
        <h4>digite o nome do aquivo para poder mostrar</h4>
        <input type="text"  name="arquivo" placeholder="digite do aquivo com a sua extensão">
        <h3>Uma linha ou todo conteudo do arquivo</h3>
        <p for="">uma linha apeneas</p>
        <input type="submit" name="uma" placeholder="uma">
        <p for=""> Todo conteudo</p>
        <input type="submit" name="tudo">
</form>
<?php
if(isset($_POST['arquivo']))
{
    $arquivo = $_POST['arquivo'];
    if(isset($_POST['uma']))
    {
     $f = fopen($arquivo, "r");
    // Lê uma linha e escreve no cliente
        echo fgets($f);
        fclose($f);
    }
    else if(isset($_POST['tudo']))
    {
    $f = fopen($arquivo, "r");
    // Lê cada uma das linhas do arquivo
    while(!feof($f)) {
    echo fgets($f) . "<br />";
    }
    fclose($f);
    }
}
?>
<a href="index.php"><h2>sair</h2></a>
    </body>
    </html>