<?php

// Define constantes para informações de conexão com o banco de dados
DEFINE("host", "127.0.0.1"); // Endereço do servidor MySQL
DEFINE("usuario", "root"); // Nome de usuário do MySQL
DEFINE("senha", ""); // Senha do MySQL (no seu caso, está vazia)
DEFINE("bd", "bd_dev"); // Nome do banco de dados

// Estabelece a conexão com o banco de dados
$conexao =  mysqli_connect(host, usuario, senha, bd) or die(mysqli_erro());
