<?php
if(isset($_POST['submit']))
{
include_once('conection.php');
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$data_nasc = $_POST['data_nascimento'];

$result = mysqli_query($conexao, "INSERT INTO clientes(nome,email,celular,data_nasc) VALUES ('$nome','$email','$celular','$data_nasc')");
header('Location: index.php');


}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
<div class="box">
    <form action="formulario.php" method="POST">
    <fieldset>
        <legend><b>Formulário de cadastro</b></legend>
        <br>
        <div class="inputBox">
            <input type="text" name="nome" id="nome" class="inputUser" required>
            <label for="nome" class="labelInput">Nome </label>
        </div> 
        <br><br>
        <div class="inputBox">
            <input type="password" name="senha" id="senha" class="inputUser" required>
            <label for="senha" class="labelInput">Senha</label>
        </div>
        <br><br> 
        <div class="inputBox"> 
            <input type="email" name="email" id="email" class="inputUser" required>
            <label for="email" class="labelInput">Email</label>
       </div> 
       <br><br>
        <div class="inputBox"> 
            <input type="tel" name="celular" id="celular" class="inputUser" required>
            <label for="celular" class="labelInput">Celular</label>
        </div> 
        <br><br>
        <div> 
            <label for="data_nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="inputuser" required>
            
        </div> 
        <br><br>
        <input type="submit" name="submit" id="submit" value="Enviar">
        <br><br>

        <div class="voltar">  <a href="index.php"> Voltar </a>
            
        </div>


    </fieldset>

    </form>
</div>
</body>
</html>