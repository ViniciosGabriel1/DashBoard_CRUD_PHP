<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>EstruturaRep</title>
</head>

<body>
    <br><br>
    <nav>
        <ul class="menu">
            <li><a href="dash.php">Home</a></li>
            <li><a href="login.php">Login</a></li>

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

    <Table border="1px">
        <tr>
            <td> ITEM </td>
            <td> ALGO </td>
            <td> ALGO </td>
            <td> ALGO </td>
        </tr>
        <tr>
            <?php
            $desc = "Descrição";
            $count = 0;
            for ($i = 0; $i <= 100; $i++) {

                if ($i % 2 == 0) {
                    echo ("<tr bgcolor = '#FFFF'></tr>");
                }
                echo ("<td><strong> $i </strong> </td>");
                echo ("<td><strong>$desc" . "$i" . "</strong></td>");
                echo ("<td><strong> $i  </strong></td>");
                echo ("<td><strong>$desc" . "$i" . "</strong></td>");
                echo "<tr>";
            }
            ?>
    </Table>
    </tr>
</body>

</html>