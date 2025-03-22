<?php

// Definição da classe Livro
class Livro {

    // Atributos privados (encapsulamento)
    private string $titulo;
    private string $autor;
    private int $ano_publicacao;
    private float $preco;

    // Construtor para inicializar os atributos
    public function __construct($titulo, $autor, $ano_publicacao, $preco) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano_publicacao = $ano_publicacao;
        $this->preco = $preco;
    }

    // Métodos para acessar os atributos (getters)
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getAnoPublicacao() {
        return $this->ano_publicacao;
    }

    public function getPreco() {
        return $this->preco;
    }

    // Método para modificar o preço do livro (setter)
    public function setPreco($preco) {
        if ($preco < 0) {
            throw new Exception("O preço não pode ser negativo.");
        }
        $this->preco = $preco;
    }
}

// Criação de dois objetos da classe Livro
$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954, 99.90);
$livro2 = new Livro("1984", "George Orwell", 1949, 45.50);

// Exibindo informações do primeiro livro
echo "Livro 1: \n";
echo "Título: " . $livro1->getTitulo() . "\n";
echo "Autor: " . $livro1->getAutor() . "\n";
echo "Ano de Publicação: " . $livro1->getAnoPublicacao() . "\n";
echo "Preço: R$" . $livro1->getPreco() . "\n\n";

// Exibindo informações do segundo livro
echo "Livro 2: \n";
echo "Título: " . $livro2->getTitulo() . "\n";
echo "Autor: " . $livro2->getAutor() . "\n";
echo "Ano de Publicação: " . $livro2->getAnoPublicacao() . "\n";
echo "Preço: R$" . $livro2->getPreco() . "\n\n";

// Alterando o preço do segundo livro
$livro2->setPreco(49.90);

// Exibindo o novo preço do segundo livro
echo "Após alteração do preço, Livro 2: \n";
echo "Preço Atualizado: R$" . $livro2->getPreco() . "\n";

