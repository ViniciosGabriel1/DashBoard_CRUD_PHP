<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Estrutura condicional</title>
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
        <!-- Formulário para submeter dados -->
        <form action="estruturaCond.php" method="POST"><br>
            <label for="diasemana">Escolha um número de 1 a 7</label>
            <input type="text" name="diasemana" id="">
            <label for="diasemana">Digite a hora</label>
            <input type="text" name="hora" id="">
            <input type="submit">
        </form>


        <?php
        // Obtendo os valores do formulário
        $diaSemana = $_POST["diasemana"];
        $hora = $_POST["hora"];

        // Estrutura switch para verificar o dia da semana
        switch ($diaSemana) {
            case 1:
                echo ("<br><br>Segunda-Feira !!");
                break;
            case 2:
                echo ("<br><br>Terça-Feira !!<br>");
                break;
            case 3:
                echo ("<br><br>Quarta-Feira !!<br>");
                break;
            case 4:
                echo ("<br><br>Quinta-Feira !!<br>");
                break;
            case 5:
                echo ("<br><br>Sexta-Feira !!<br>");
                break;
            case 6:
                echo ("<br><br>Sábado !!<br>");
                break;
            case 7:
                echo ("<br><br>Domingo !!<br>");
                break;
            default:
                echo ("<br><br>Número inválido, tente os números entre 1 e 7 !!<br>");
                break;
        }

        // Verificando a hora e exibindo a saudação apropriada
        if ($hora < 11.59 and $hora > 5) {
            echo "<br><br>Bom dia";
        } elseif ($hora > 12 and $hora < 18) {
            echo "<br><br>Boa tarde";
        } elseif ($hora > 0 and $hora < 5) {
            echo "<br><br>Boa madrugada";
        } else {
            echo "<br><br>Boa noite";
        }
        ?>

    </section>
</body>

</html>