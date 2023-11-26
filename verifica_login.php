<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<?php
include("conexao.php");

$_login_form = $_POST["login"];
$_senha_form = $_POST["senha"];
$_hash = md5($_senha_form);

$query = "SELECT * FROM tb_login WHERE login='$_login_form' AND senha='$_hash'";
$result = mysqli_query($conexao, $query);

if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION["usuario"] = $_login_form;
    header("location: painel.php"); // Redireciona para a página após o login
} else {

    header("location: login_senha_invalido.php");
    header("refresh: 3;url=login.php");
}

mysqli_close($conexao);
