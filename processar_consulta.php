<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Resultado Consulta</title>
    <style>
    .status-ativo {
        color: green;
    }

    .status-inativo {
        color: red;
    }
    </style>


    <script>
    function mostrarAlerta() {
        alert('🩵Status alterado com sucesso!🩵');
        // Adicione aqui qualquer ação adicional que você deseja realizar ao clicar no link
    }
    </script>
</head>
<br><br>

<body>

    <nav>
        <ul class="menu">
            <li><a href="dash.php">Home</a></li>
            <li><a href="login.php">Login</a></li>

            <li><a href="#">O que fazemos?</a>
                <ul>
                    <li><a href="estruturaCond.php">Estrutura condicional</a></li>
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

    // Verifica se o método de requisição é POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $termo_busca = $_POST["campo_busca"];
        $coluna = $_POST["colunas"];

        // Verifica se a conexão foi bem-sucedida
        if ($conexao->connect_error) {
            die("Erro de conexão: " . $conexao->connect_error);
        }

        // Use declarações preparadas para evitar SQL injection
        $query = "SELECT * FROM tb_login WHERE $coluna LIKE '%$termo_busca%'";
        $resultado = $conexao->query($query);

        echo ("<br><section>");
        echo ("<form action='' method='POST'>");


        // Verifica se a consulta foi bem-sucedida
        if ($resultado) {
            echo ("<center>");
            echo ("<h1>RESULTADOS : </h1><br>");
            echo ("<h1>RESGISTRO CUJO $coluna CONTÉM  '$termo_busca': </h1><br>");
            echo ("</center>");

            // Exibe os resultados
            while ($registro = $resultado->fetch_assoc()) {
                $_id = $registro["id"];
                $data_cadastro = $registro["data_cadastro"];

                $data_formatada = date('d/m/Y', strtotime($data_cadastro));

                echo "<section>";
                echo "======================================== <br>";
                echo "<strong> <br>-ID: " . $registro["id"] . " <br>- NOME: " . $registro["nome"] .  "  <br>- SOBRENOME: " . $registro["sobrenome"] .  "  <br>- LOGIN: " . $registro["login"]  . "  <br>- SENHA: " . $registro["senha"] . "  <br>- ESTADO CIVIL: " . $registro["estado_civil"]  . "  <br>- SEXO: " . $registro["sexo"]  . "  <br>- DATA CADASTRO: " . $data_formatada . "  <br>- STATUS: <span class='" . ($registro["status"] == 'ativo' ? 'status-ativo' : 'status-inativo') . "'>" . $registro["status"] . "</span><br>";
                echo "<br><a href='editar_usuario.php?id=" . $registro['id'] . "' target='_blank'>Editar Usuário</a><br>";
                echo "<br><a href='editar_status.php?id=" . $_id . "' onclick='mostrarAlerta()'>Editar Status</a>";
                echo "<br>======================================= <br>";
                echo "</section>";
            }
        } else {
            echo "Erro na consulta: " . $conexao->error;
        }
        echo ("</form>");
        echo ("</strong></section>");
    } else {

        header("location: consulta.php");
    }
    $conexao->close();
    ?>
</body>

</html>