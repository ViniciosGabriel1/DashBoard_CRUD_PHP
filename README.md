# DashBoard_CRUD_PHP

# Dashboard PHP

Este é um projeto de dashboard desenvolvido em PHP, HTML e CSS, utilizando o XAMPP para simular um ambiente cliente e servidor, e o MariaDB para armazenar dados.

## Funcionalidades

- **Navegação:**
  - Menu intuitivo para acesso rápido a diferentes partes do dashboard.

- **Validações de Segurança:**
  - Evita registros duplicados: O sistema impede a inserção de registros com logins ou senhas idênticos.
  - Validação de Login: Garante que o login só seja efetuado se os dados fornecidos pertencerem ao banco de dados.

- **Integração com Banco de Dados:**
  - Utilização do MariaDB para armazenar e gerenciar dados do sistema.

- **Criptografia de Senhas:**
  - As senhas dos usuários são armazenadas de forma segura usando algoritmos de criptografia, garantindo a proteção dos dados.

## Ambiente de Desenvolvimento

O projeto foi desenvolvido e testado usando o XAMPP para criar um ambiente cliente e servidor local. A base de dados MariaDB foi utilizada para persistência dos dados.

## Pré-requisitos

- [XAMPP](https://www.apachefriends.org/index.html) instalado
- [MariaDB](https://mariadb.org/) instalado

## Instalação e Execução

1. Clone este repositório:

    ```bash
    git clone https://seu-repositorio.git
    ```

2. Configure o XAMPP e MariaDB conforme necessário.

3. Inicie o servidor web e o banco de dados.

4. Navegue até o diretório do projeto:

    ```bash
    cd nome-do-seu-projeto
    ```

5. Execute o projeto:

    ```bash
    php -S localhost:8000
    ```

6. Abra seu navegador e acesse `http://localhost:8000` ou vá no xamp Panel Control e clique em admin que se encontra ao lado do botão "Start".

## Estrutura do Projeto

A estrutura do projeto é organizada da seguinte forma:

```plaintext
/xampp
    /htdocs
        index.php
        outro-arquivo.html
        /seu-projeto
            index.php
            style.css
            ...
