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
<form action="grupos.php" method="post">
        <h1>Membros do meu grupo</h1>
        <h4>quantidade de membros</h4>
        <input type="number"  name="numero" placeholder="digite quantos membros são">
        <h3>digite o nome dos membros do seu grupo e coloca <b>","</b> no final de cada nome</h3>
        <input type="text" name="grupo" placeholder="Digite os membros do grupo">
        <input type="submit" name="submit">
        <?php
    if(isset($_POST["submit"]) && isset($_POST["grupo"]) && isset($_POST["numero"]))
    {
        $quantidade = $_POST["numero"];
        $membros = $_POST["grupo"];
        $arraysmembros = explode (",", $membros);
        echo "<p>lista dos membros do seu grupo:</p>";
        echo "<ul>";
        // Loop pelo array membros
        for ($x = 0; $x < $quantidade; $x++)
        {
            echo "<li>" . $arraysmembros[$x] . "</li>";
        }
        echo "</ul>";
    }
?>
        <a href="index.php"><h2>sair</h2></a>
    </form>
 
    
</body>
</html>