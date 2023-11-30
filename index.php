<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Formulário</title>
</head>


<body>
    <br><br>
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
        <form action="cadastrologinCon.php" method="POST"><br>
            <label for="Usuario">Usuário</label>
            <input type="text" name="login" id="" required>
            <label for="Senha">Senha</label>
            <input type="password" name="senha" id="" required>
            <label for="Nome">Nome</label>
            <input type="text" name="nome" id="" required>
            <label for="Sobre Nome">SobreNome</label>
            <input type="text" name="snome" id="" required>
            <label for="cars">Estado Civil</label>
            <select name="estado_civil">
                <option value="Solteiro(a)">Solteiro(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Divorciado(a)">Divorciado(a)</option>

            </select>
            <label for="w">Sexo</label>
            <select name="sexo">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>

            </select>
            <input type="submit">


    </section>


</body>

</html>