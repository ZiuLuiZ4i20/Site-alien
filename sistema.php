<?php
session_start();
print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');

}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM usuarios ORDER BY id DESC";

$result = $conexao->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
    <link rel="stylesheet" href="sistema.css">
</head>

<body>
    <?php
    echo "<h1>Bem vindo <u>$logado</u></h1>"
    ?>
<div>
    <table class="table">
        <thead>
            <tr>
                <th> scope="col">#</th>
                <th> scope="col">nome</th>
                <th> scope="col">senha</th>
                <th> scope="col">email</th>
                <th> scope="col">celular</th>
                <th> scope="col">data de nascimento</th>

            </tr>
        </thead>
        <tbody>
            <?php
            while($user_data = mysqli_fetch_assoc($result))
            {
                echo"<tr>";
                echo"<td>".$user_data['id']. "</td>";
                echo"<td>".$user_data['nome']. "</td>";
                echo"<td>".$user_data['senha']. "</td>";
                echo"<td>".$user_data['email']. "</td>";
                echo"<td>".$user_data['celular']. "</td>";
                echo"<td>".$user_data['data_nasc']. "</td>";

            }
            ?>
        </tbody>
</table>
</div>

</body>
</html>