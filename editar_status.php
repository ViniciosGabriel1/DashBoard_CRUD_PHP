<?php
// script.php - Script que utiliza a conexão existente

// Inclui o arquivo de conexão
include('conexao.php');

// ID do usuário que você deseja recuperar
$_id = $_GET["id"]; // Substitua pelo ID real do usuário

// Consulta SQL para obter o status do usuário
$sql = "SELECT status FROM tb_login WHERE id = $_id";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    // Recupera o resultado da consulta
    $row = $result->fetch_assoc();
    $statusAtual = $row["status"];

    // Calcula o novo status oposto
    $novoStatus = ($statusAtual == "ativo") ? "inativo" : "ativo";

    // Atualiza o status no banco de dados
    $updateSql = "UPDATE tb_login SET status = '$novoStatus' WHERE id = $_id";

    if ($conexao->query($updateSql) === TRUE) {
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
$conexao->close();