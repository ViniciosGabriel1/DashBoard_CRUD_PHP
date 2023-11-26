<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Login</title>
</head>
<br><br>

<body>

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
        <form action="verifica_login.php" method="POST"><br>
            <label for="Usuario">Usuário</label>
            <input type="text" name="login" id="" required>
            <label for="Usuario">Senha</label>
            <input type="password" name="senha" id="" required>
            <input type="submit">

    </section>

</body>

</html>