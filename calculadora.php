<!DOCTYPE html>
<html lang="PT-BR">
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Tabuada</title>
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
        <form method="post">
            <!-- Formulário para inserir um número -->
            <label for="numero" style="font-size: 15px;">Digite um número:</label><br>
            <input type="number" name="numero" id="numero" required>
            <button class="submit3" type="submit"><strong>Mostrar Tabuada</strong></button>
        </form>
    </section>


    <?php
    echo ("<br><section>");
    $numero = $_POST["numero"];
    if (is_numeric($numero)) {
        // Verifica se o valor inserido é um número
        echo "<h2>Tabuada do $numero:</h2>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    } else {
        echo "<p>Por favor digite um número valido</p>";
    }
    echo ("</section>");
    ?>
</body>

</html>