<?php
// script.php - Script que utiliza a conexão existente

// Inclui o arquivo de conexão
include('conexao.php');

// Validação do ID do usuário
$_id = $_GET["id"];


// Consulta SQL para obter o status do usuário
$sql = "SELECT status FROM tb_login WHERE id = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Recupera o resultado da consulta
    $row = $result->fetch_assoc();
    $statusAtual = $row["status"];

    // Calcula o novo status oposto
    $novoStatus = ($statusAtual == "ativo") ? "inativo" : "ativo";

    // Atualiza o status no banco de dados
    $updateSql = "UPDATE tb_login SET status = ? WHERE id = ?";
    $updateStmt = $conexao->prepare($updateSql);
    $updateStmt->bind_param("si", $novoStatus, $_id);
    $updateStmt->execute();

    if ($updateStmt->affected_rows > 0) {
        // Atualização bem-sucedida, redireciona para a página anterior
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        echo "Erro ao atualizar o status do usuário: " . $conexao->error;
    }
} else {
    echo "Nenhum resultado encontrado para o ID do usuário: $_id";
}

// Fecha a conexão com o banco de dados
$stmt->close();
$updateStmt->close();
$conexao->close();
