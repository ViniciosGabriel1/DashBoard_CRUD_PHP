<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title>Consulta de Registros</title>
</head>

<body>
    <br> <br>
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
    <section>
        <center>
            <h1>Consulta de Registros</h1> <br>
        </center>

        <!-- Adiciona um formulário para inserir critérios de pesquisa -->
        <form action="processar_consulta.php" method="post">
            <label for="campo_busca">O que você quer que contenha na consulta? :</label>
            <input type="text" id="campo_busca" name="campo_busca">
            <label for="colunas">Coluna</label>
            <select name="colunas">
                <option value="id">ID</option>
                <option value="nome">Nome</option>
                <option value="sobrenome">Sobrenome</option>
                <option value="login">Login</option>
                <option value="senha">Senha</option>
                <option value="sexo">Sexo</option>
                <option value="estado_civil">Estado Civil</option>
                <option value="data_cadastro">Data de Cadastro</option>
                <option value="status">Status</option>

            </select>
            <input type="submit" value="Pesquisar">
        </form>
    </section>


</body>

</html>