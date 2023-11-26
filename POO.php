<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
<?php


class Pessoa
{
    public $nome;
    public $idade;
    public $altura;

    public function apresentar($nome, $idade, $altura)
    {
        echo "<strong>Me chamo $nome , tenho $idade anos e meço $altura de altura.</strong> <br>";
    }
}

class Funcionario extends Pessoa
{
    public $salario;
    public $matricula;
    public $empresa;

    public function apresentarComoFuncionario($nome, $empresa, $idade, $altura, $matricula, $salario)
    {
        echo ("<br>");
        echo "<strong>Me chamo $nome, tenho $idade anos e meço $altura de altura.";
        echo "Sou funcionário da $empresa,  minha matrícula é $matricula e meu salário é R$ $salario.</strong>";
        echo ("<br>");
    }
}

echo "<br><section>";
echo ("<form action=''>");
$pessoa1 = new Pessoa();
$empregado = new Funcionario();

$pessoa1->apresentar("Júlio", 20, 1.79);
$empregado->apresentarComoFuncionario("Vinicios", "Accenture", 20, 1.80, 34342, 2500);
echo ("</form>");
echo "</section>";
