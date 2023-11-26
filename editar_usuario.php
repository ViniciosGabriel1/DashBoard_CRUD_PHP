<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<br><br>
<title>Editar Usuário</title>
<nav>
    <ul class="menu">
        <li><a href="dash.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="calculadora.php">Calculadora</a></li>
        <li><a href="#">O que fazemos?</a>
            <ul>
                <li><a href="estruturaCond.php">Estrutura condicional </a></li>
                <li><a href="estruturaRep.php">Estrutura Repetição</a></li>
                <li><a href="POO.php">POO</a></li>
            </ul>
        </li>
        <li><a href="consulta.php">Consultar Registros</a></li>
        <li><a href="index.php">Forms</a></li>
        <li><a href="selecionar_cadastro.php">Listar Usuário</a></li>
    </ul>
    <br><br><br><br><br><br>
</nav>
<?php
include("conexao.php");

$_ID = $_GET["id"];

$query = "SELECT * FROM tb_login WHERE id =" . $_ID;

$result = mysqli_query($conexao, $query);

while ($linha = mysqli_fetch_array($result)) {
    echo ("<section>");
    echo ("<form action='atualizar_usuario.php' method='POST'>");
    echo "ID: <input type='text' name='id' value='" . $linha['id'] . "' readonly></br>";
    echo ("NOME: <input type='text' name='nome' value=" . $linha['nome'] . "></br>");
    echo ("SOBRENOME: <input type='text' name='snome' value=" . $linha['sobrenome'] . "></br>");
    echo ("LOGIN: <input type='text' name='login' value=" . $linha['login'] . "></br>");
    echo ("SENHA: <input type='password' name='senha' ></br>");
    echo "ESTADO CIVIL: <select name='estado'>
        <option value='Solteiro(a)' " . ($linha['estado_civil'] == 'Solteiro(a)' ? 'selected' : '') . ">Solteiro(a)</option>
        <option value='Casado(a)' " . ($linha['estado_civil'] == 'Casado(a)' ? 'selected' : '') . ">Casado(a)</option>
        <option value='Divorciado(a)' " . ($linha['estado_civil'] == 'Divorciado(a)' ? 'selected' : '') . ">Divorciado(a)</option>
        <option value='Viúvo(a)' " . ($linha['estado_civil'] == 'Viúvo(a)' ? 'selected' : '') . ">Viúvo(a)</option>
        </select></br>";
    echo "SEXO: <select name='sexo'>
        <option value='Masculino' " . ($linha['sexo'] == 'Masculino' ? 'selected' : '') . ">Masculino</option>
        <option value='Feminino' " . ($linha['sexo'] == 'Feminino' ? 'selected' : '') . ">Feminino</option>
        <option value='Outro' " . ($linha['sexo'] == 'Outro' ? 'selected' : '') . ">Outro</option
        ></select></br>";

    echo ("<input type='submit'>");
    // Adicione o botão de delete
    echo "<input type='button' value='Deletar' onclick='confirmDelete()'>";

    echo ("</form>");
    echo ("</section>");

    // Adicione um script JavaScript para confirmar a exclusão
    echo "<script>
    function confirmDelete() {
        var result = confirm('Tem certeza que deseja deletar este registro?');
        if (result) {
            window.location.href = 'deletar_usuario.php?id=" . $linha['id'] . "';
        }
}
</script>";
}
