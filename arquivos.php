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
<h2>sistemas de arquivos</h2>
<?php
// Pesquisar e escrever propriedades
echo "<h3>Editado pela última vez em: " . date("r",
filemtime("arquivos.php"));
echo "<h3>Aberto pela última vez em: " . date("r",
fileatime("arquivos.php"));
echo "<h3>Tamanho do arquivo: " . filesize("arquivos.php") . " bytes";
?>
<ul>
<li>
     <a href="ler.php"><h2>ler um aquivo</h2></a>
</li>
<li>
   <a href="escrever.php"> <h2>escrever em um arquivo </h2></a>
</li>
<li>
   <a href="#"> <h2>adicionar um arquivo</h2></a>
</li>
</ul>    
    <a href="index.php"><h2>sair</h2></a>
</body>
</html>