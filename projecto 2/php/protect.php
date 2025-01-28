<?php
    if(!isset($_SESSION))
    {
        session_start();
    }

    if(!isset($_SESSION['id_user']))
    {
        die("Para acessar esta página, você precisa estar logado. <p><a href=\"index.php\">Ir para o login</a></p>");;
    }
?>