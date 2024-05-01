<?php 

    if(!isset($_SESSION))
        session_start();

    if(!isset($_SESSION['id']))
        die('Você não está logado. <a href="login.php">Clique aqui</a> para logar.');

    if(isset($_POST['email'])) {
 
    include('conexao.php');

    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


    $mysqli->query("INSERT INTO senhas (email, senha) VALUES('$email', '$senha')");

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Cadastro de Usuários</h1>
<form action="" method="post">
    <p><label for="">E-mail:</label>
    <input type="text" name="email"></p>
    <p></p><label for="">Senha:</label>
    <input type="text" name="senha"><br></p>
    <button type="submit">Cadastrar senha</button><br>
    </form>
</body>
</html>