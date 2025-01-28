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
<form action="login.php" method="post">
        <h1>login</h1>
        <h4>digite o nome do user</h4>
        <input type="text"  name="user" placeholder="digite quantos membros são">
        <h3>digite sua palavra</h3>
        <input type="text" name="password" placeholder="Digite os membros do grupo">
        <input type="submit" name="submit">
    </form>
    <?php
// Verifica se usuário e senha conferem
if ($_POST["user"] == "damiao" && $_POST["password"] == "xp4") {
// Se usuário e senha conferir definimos session para YES
session_start();
$_SESSION["Login"] = "xp";
echo "<h1>Você está logado</h1>";
echo "<p><a href='document.php'>Link para o arquivo restrito</a><p/>";
}
else {
// Se usuário e senha conferir definimos session para NO
session_start();
$_SESSION["Login"] = "NO";
echo "<h1>Você NÃO está logdo</h1>";
echo "<p>tens que colocar a seha e user para teres o link<\p>";
}
?>
    <a href="index.php"><h2>sair</h2></a>
</body>
</html>