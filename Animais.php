<?php

// Definindo a classe base "Animal"
class Animal {
    // Atributos protegidos para nome e idade
    protected string $nome;
    protected int $idade;

    // Construtor para inicializar os atributos
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método fazerSom (será sobrescrito nas classes filhas)
    public function fazerSom() {
        // Não faz nada aqui, será implementado nas classes filhas
    }

    // Métodos para acessar os atributos
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}

// Definindo a classe "Cachorro", que herda da classe "Animal"
class Cachorro extends Animal {
    // Sobrescrevendo o método fazerSom para exibir "Au au!"
    public function fazerSom() {
        return "Au au!";
    }
}

// Definindo a classe "Gato", que herda da classe "Animal"
class Gato extends Animal {
    // Sobrescrevendo o método fazerSom para exibir "Miau!"
    public function fazerSom() {
        return "Miau!";
    }
}

// Instanciando objetos da classe Cachorro e Gato
$cachorro = new Cachorro("Rex", 3);
$gato = new Gato("Mimi", 2);

// Exibindo as informações do cachorro
echo "Cachorro:\n";
echo "Nome: " . $cachorro->getNome() . "\n";
echo "Idade: " . $cachorro->getIdade() . "\n";
echo "Som: " . $cachorro->fazerSom() . "\n\n";

// Exibindo as informações do gato
echo "Gato:\n";
echo "Nome: " . $gato->getNome() . "\n";
echo "Idade: " . $gato->getIdade() . "\n";
echo "Som: " . $gato->fazerSom() . "\n";

