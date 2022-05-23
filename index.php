<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
        <h1>Faça o login para acessar nosso site</h1>
        <img src="alienimage.svg" class="left-login-image" alt="Alien">
        </div>
        <form action="testelogin.php" method="POST">
        <div class="right-login">
         <div class="card-login">
             <h1>LOGIN</h1>
        <div class="textfield">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email">
        </div>
        <div class="textfield">
        <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Senha">
        </div>
        <button type="submit" class="button">Login</button>
        <div class="Ou">
        <h3>Ou</h3>
        </div>
    <div class="Link">  <a href="formulario.php">Cadastre-se </a>
  </div>
        
        </div>
         </form>
         