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
<form action="escrever.php" method="post">
    <h1>escrever em um arquivo</h1>
    <h4>digite o nome do aquivo para poder mostrar</h4>
    <input type="text" name="arquivo" placeholder="digite do arquivo com a sua extensão">
    <h4>digite o texto</h4>
    <textarea name="texto" rows="5" cols="40" placeholder="Escreva seu aqui..."></textarea><br><br>
    <input type="submit" name="tudo" value="salvar e mostrar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['arquivo']) && isset($_POST['texto'])) {
        $arquivo = $_POST['arquivo'];
        $texto = $_POST['texto'];

        // Verifica se o diretório tem permissões de escrita
        if (!is_writable($arquivo)) {
            echo "O arquivo ou diretório não tem permissões de escrita.";
        } else {
            // Abre o arquivo para escrita
            $f = fopen($arquivo, "w");
            if ($f) {
                fwrite($f, $texto);
                fclose($f); // Fecha o arquivo após a escrita
                echo "Texto salvo com sucesso no arquivo.";
            } else {
                echo "Erro ao abrir o arquivo para escrita.";
            }
        }
    }

    if (isset($_POST['arquivo'])) {
        $arquivo = $_POST['arquivo'];

        // Verifica se o arquivo existe para leitura
        if (file_exists($arquivo)) {
            $f = fopen($arquivo, "r");
            if ($f) {
                echo "<h3>O seu texto:</h3>";
                while (!feof($f)) {
                    echo fgets($f) . "<br />";
                }
                fclose($f); // Fecha o arquivo após a leitura
            } else {
                echo "Erro ao abrir o arquivo para leitura.";
            }
        } else {
            echo "O arquivo não existe.";
        }
    }
}
?>
<a href="index.php"><h2>sair</h2></a>
    </body>
</html>