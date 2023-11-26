<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["snome"];
    $login = $_POST["login"];
    $senha_form = $_POST["senha"];
    $estado_civil = $_POST["estado"];
    $sexo = $_POST["sexo"];
    $status = $_POST["status"];


    // Verificar se o usuário já existe
    $query_user = "SELECT * FROM tb_login WHERE login = '$login' AND id != $id";
    $result_user = mysqli_query($conexao, $query_user);

    if (mysqli_num_rows($result_user) > 0) {
        header("Location: usuario_duplicado.php");
        exit();
    }

    // Verificar se a senha já existe
    if (!empty($senha_form)) {
        $hash = md5($senha_form);
        $query_senha = "SELECT * FROM tb_login WHERE senha = '$hash' AND id != $id";
        $result_senha = mysqli_query($conexao, $query_senha);

        if (mysqli_num_rows($result_senha) > 0) {
            header("Location: senha_duplicada.php");
            exit();
        }
    }

    // Construindo a query de atualização
    $query = "UPDATE tb_login SET sobrenome='$sobrenome', login='$login', `estado_civil`='$estado_civil', sexo='$sexo', status='$status'";

    // Se o campo de senha não estiver vazio, criptografa a nova senha
    if (!empty($senha_form)) {
        $query .= ", senha='$hash'";
    }

    // Adiciona a condição WHERE para atualizar apenas o registro específico
    $query .= " WHERE id=$id";

    // Executando a query
    if (mysqli_query($conexao, $query)) {
        header("Location: atualizar_sucesso.php");
    } else {
        echo "Erro ao atualizar o registro: " . mysqli_error($conexao);
        header("refresh:4;url=index.php");
    }
}

mysqli_close($conexao);
?>