<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Selecionar cadastro</title>
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

    <section>
        <h1>⬇️Listagem de Registros⬇️</h1>
    </section>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>SOBRENOME</th>
            <th>LOGIN</th>
            <th>SENHA</th>
            <th>ESTADO CIVIL</th>
            <th>SEXO</th>
            <th>DATA CADASTRO</th>
            <th>STATUS</th>
            <th>Editar Usuario</th>
            <th>Editar Status</th>
        </tr>

        <?php
        include('conexao.php');

        $query = "SELECT id, nome, sobrenome, login, senha, estado_civil, sexo, DATE_FORMAT(data_cadastro, '%d/%m/%Y') as data_cadastro, status FROM tb_login;";

        $resultado = mysqli_query($conexao, $query) or die("Erro no Select");

        while ($_rows = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?php echo $_rows["id"] ?></td>
            <td><?php echo $_rows["nome"] ?></td>
            <td><?php echo $_rows["sobrenome"] ?></td>
            <td><?php echo $_rows["login"] ?></td>
            <td><?php echo $_rows["senha"] ?></td>
            <td><?php echo $_rows["estado_civil"] ?></td>
            <td><?php echo $_rows["sexo"] ?></td>
            <td><?php echo $_rows["data_cadastro"] ?></td>
            <td><?php echo $_rows["status"] ?></td>
            <td><a href=editar_usuario.php?id=<?php echo $_rows['id']; ?>>Editar Usuario</a></td>
            <td><a href=editar_status.php?id=<?php echo $_rows['id']; ?>>Editar Status</a></td>
        </tr>
        <?php } ?>
    </table>

</body>

</html>