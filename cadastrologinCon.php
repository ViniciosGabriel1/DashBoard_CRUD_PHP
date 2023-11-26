<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<!-- Link para o arquivo CSS -->

<?php
// Incluindo o arquivo de conexão com o banco de dados
include("conexao.php");

// Obtendo os dados do formulário
$_nome = $_POST["nome"];
$_snome = $_POST["snome"];
$_login = $_POST["login"];
$_senha = $_POST["senha"];
$_hash = md5($_senha); // Criptografando a senha
$estado_civil = $_POST["estado_civil"];
$_sexo = $_POST["sexo"];
$_data = date("Y-m-d");


#$result = explode('-', $_data);
#$dia = $result[2];
#$mes = $result[1];
#$ano = $result[0];

#$_data_formatada = $dia . '-' . $mes . '-' . $ano;



// Verificar se o usuário já existe
$check_user_query = "SELECT * FROM tb_login WHERE login='$_login'";
$check_user_result = mysqli_query($conexao, $check_user_query);

if (mysqli_num_rows($check_user_result) > 0) {
    header("location: usuario_duplicado.php");


    exit();
}

// Verificar se a senha já existe
$check_password_query = "SELECT * FROM tb_login WHERE senha='$_hash'";
$check_password_result = mysqli_query($conexao, $check_password_query);

if (mysqli_num_rows($check_password_result) > 0) {
    header("location: senha_duplicada.php");
    exit();
}

// Construindo a query de inserção
$query = "INSERT INTO tb_login (id, nome, sobrenome, login, senha, `estado_civil`, sexo, `data_cadastro`, status) VALUES (NULL, '$_nome', '$_snome', '$_login', '$_hash', '$estado_civil', '$_sexo', '$_data', DEFAULT)";

// Executando a query
if (mysqli_query($conexao, $query)) {
    header("location: registro_sucesso.php");
} else {
    echo "<section>";
    echo "Erro ao inserir registro: " . mysqli_error($conexao);
    echo "</section>";
    header("refresh:4;url=index.php");
}

// Fechando a conexão com o banco de dados quando terminar
mysqli_close($conexao);
