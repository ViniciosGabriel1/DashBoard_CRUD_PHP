<link rel="stylesheet" href="style.css">

<?php
class Produto
{

    public $nome;
    public $preco;
    public $quantidade;

    function __construct($nome, $preco, $quantidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setNome($novoNome)
    {
        $this->nome = $novoNome;
    }

    public function setPreco($novoPreco)
    {
        $this->preco = $novoPreco;
    }

    public function setQuantidade($novaQuantidade)
    {
        $this->quantidade = $novaQuantidade;
    }
}

$produto = new Produto("Celular", 1200, 12);
echo "<br><section>";
echo ("<form action=''>");
echo "<strong>Nome: " . $produto->getNome() . "<br>";
echo "Preço: R$ " . $produto->getPreco() . "<br>";
echo "Quantidade: " . $produto->getQuantidade() . "<br>";
$produto->setNome("Novo Celular");
$produto->setPreco(1300);
$produto->setQuantidade(15);
echo "============================";
echo "<br>Nome atualizado: " . $produto->getNome() . "<br>";
echo "Preço atualizado: R$ " . $produto->getPreco() . "<br>";
echo "Quantidade atualizada: " . $produto->getQuantidade() . "</strong><br>";
echo ("</form>");
echo "</section>";
