<?php

// Definindo a classe Produto
class Produto {

    // Atributos privados da classe
    private string $nome;      // Nome do produto
    private float $preco;      // Preço do produto
    private int $quantidade;   // Quantidade em estoque

    // Construtor para inicializar os atributos
    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    // Método para exibir informações do produto
    public function exibirInformacoes() {
        echo "Nome: {$this->nome}\n";
        echo "Preço: R$" . number_format($this->preco, 2, ',', '.') . "\n";
        echo "Quantidade em Estoque: {$this->quantidade}\n";
    }

    // Método para atualizar a quantidade em estoque
    public function atualizarQuantidade($quantidade) {
        if ($quantidade < 0) {
            throw new Exception("A quantidade não pode ser negativa.");
        }
        $this->quantidade = $quantidade;
    }

    // Método para calcular o valor total do estoque
    public function calcularValorTotal() {
        return $this->preco * $this->quantidade;
    }
}

// Criando objetos da classe Produto
$produto1 = new Produto("Notebook", 3500.00, 10);
$produto2 = new Produto("Smartphone", 1500.00, 20);

// Exibindo informações do primeiro produto
echo "Informações do Produto 1:\n";
$produto1->exibirInformacoes();
echo "Valor Total do Estoque: R$" . number_format($produto1->calcularValorTotal(), 2, ',', '.') . "\n\n";

// Exibindo informações do segundo produto
echo "Informações do Produto 2:\n";
$produto2->exibirInformacoes();
echo "Valor Total do Estoque: R$" . number_format($produto2->calcularValorTotal(), 2, ',', '.') . "\n\n";

// Atualizando a quantidade do segundo produto
$produto2->atualizarQuantidade(25);

// Exibindo informações atualizadas do segundo produto
echo "Após atualização da quantidade:\n";
$produto2->exibirInformacoes();
echo "Valor Total do Estoque Atualizado: R$" . number_format($produto2->calcularValorTotal(), 2, ',', '.') . "\n";

