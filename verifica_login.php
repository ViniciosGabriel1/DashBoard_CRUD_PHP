<?php
include("conexao.php");

$_login_form = $_POST["login"];
$_senha_form = $_POST["senha"];
$_hash = md5($_senha_form);

// Verificar o status do usuário
$sqlStatus = "SELECT status FROM tb_login WHERE login = '$_login_form' OR senha ='$_senha_form'";
$resultStatus = $conexao->query($sqlStatus);

if ($resultStatus->num_rows > 0) {
    $rowStatus = $resultStatus->fetch_assoc();
    $statusAtual = $rowStatus["status"];

    if ($statusAtual == "inativo") {
        header("location: usuario_inativo.php");
        header("refresh: 3;url=login.php");
        // Pode ser interessante redirecionar para uma página de erro ou para a página de login.
        exit;
    }
}


// Verificar as credenciais do usuário
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
