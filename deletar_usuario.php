<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<?php
include 'conexao.php'; // Inclui o arquivo de conexão

// Verificar se foi passado um ID para deletar
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Preparar e executar a query de delete
    $sql = "DELETE FROM tb_login WHERE id = $id";
    if ($conexao->query($sql) === TRUE) {
        echo "<br><br><section>";

        echo "Registro deletado com sucesso";
        header("refresh: 2;url=consulta.php");
        echo "</section>";
    } else {
        echo "<br><br><section>";
        echo "Erro ao deletar registro: " . $conexao->error;
        echo "</section>";
    }
} else {
    echo "<br><br><section>";
    echo "ID não fornecido para deletar o registro";
    echo "</section>";
}

// Fechar a conexão (se necessário)
$conexao->close();