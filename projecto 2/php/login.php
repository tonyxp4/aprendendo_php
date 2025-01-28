<?php
$conn = new mysqli("localhost", "tonyxp4", "543216", "carrerbridge");
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <title> new carrerbridge</title>
</head>
<body>
<div class="container" id="container">
        <div class="form-container sign-up">
            <form action="" method="post">
                <h1>Criar conta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>responde os espaços em branco para criar a conta</span>
                <input type="text" name="nome" placeholder="nome">
                <input type="email" name="email" placeholder="nmail">
                <input type="password" name="senha" placeholder="password">
                <input type="submit" value="cadastrar">
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="" method="post">
                <h1>Login</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Digite o seu email e senha</span>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="senha" placeholder="Password">
                <a href="#">esqueceu a palavra passe?</a>
                <input type="submit" value="entrar">
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1><h1 style="color: rgb(255, 176, 5);">Carrer</h1> <h1>Bridge</h1></h1>
                    <p>Se ja tem uma conta click em login para poder acessar a sua conta</p>
                    <button class="hidden" id="login">Login</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1><h1 style="color: rgb(255, 176, 5);">Carrer</h1> <h1>Bridge</h1></h1>
                    <p>Se ainda não tem uma conta click em cadastrar !</p>
                    <button class="hidden" id="register">Cadastrar-se</button>
                </div>
            </div>
        </div>
    </div>
    <script src="javajs/index.js"></script>
</body>
   <?php
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $sql = "INSERT INTO usuario(nome, email, senha, data_registro)
        VALUES('$nome','$email','$senha',NOW())";

        if ($conn->query($sql) === true) {
            header("location: index.php"); 
        }else {
            echo "erro" . $conn->error;
        }
    }
        if(strlen($_POST['email']) == 0)
        {
            echo "preenchar o seu email";
        } else if(strlen($_POST['senha']) == 0)
        {
            echo "preenchar a sua  senha";
        }
        else
        {
            $email = $conn->real_escape_string($_POST['email']);
            $senha = md5($_POST['senha']);

            $sql_code = "SELECT * FROM  usuario WHERE email = '$email' AND senha ='$senha'";
            $sql_query = $conn->query($sql_code) or die("Falha  na execusão do codigo ". $conn->error);
            $quantidade = $sql_query->num_rows;

            if($quantidade == 1)
            {
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION))
                {
                    session_start();
                }
                $_SESSION['id_user'] = $usuario['id_user'];
                header('Location: ../index.php');
                exit;
            } else
            {
                echo "usuario não encontrado";
            }
        }
?>
</html>