<?php

session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    include_once('conection.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT + FROM clientes WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

}

if(mysqli_num_rows($result) < 1)
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}
else{
    $_SESSION['email'];
    $_SESSION['senha'];
    header('Location: sistema.php');

}

?>