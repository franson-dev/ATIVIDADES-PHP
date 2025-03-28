<?php

// Definição da classe Funcionario
class Funcionario {

    // Atributos com diferentes níveis de visibilidade
    public string $nome;          // Nome é público e pode ser acessado diretamente
    protected float $salario;     // Salário é protegido e só pode ser acessado pela classe e suas subclasses
    private string $senha;        // Senha é privada e só pode ser acessada pela própria classe

    // Construtor para inicializar os atributos
    public function __construct($nome, $salario, $senha) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->senha = $senha;
    }

    // Método para exibir informações do funcionário
    public function exibirInformacoes() {
        echo "Nome: {$this->nome}\n";
        echo "Salário: R$" . number_format($this->salario, 2, ',', '.') . "\n";
    }

    // Getter para acessar o atributo protegido salario
    public function getSalario() {
        return $this->salario;
    }

    // Setter para modificar o atributo privado senha
    public function setSenha($novaSenha) {
        $this->senha = $novaSenha;
    }

    // Método público para aumentar o salário com base em um percentual
    public function aumentarSalario($percentual) {
        if ($percentual > 0) {
            $this->salario += ($this->salario * $percentual / 100);
        } else {
            throw new Exception("O percentual deve ser maior que 0.");
        }
    }
}

// Criando um objeto da classe Funcionario
$funcionario = new Funcionario("João Silva", 3000.00, "senha123");

// Exibindo informações iniciais do funcionário
echo "Informações do Funcionário:\n";
$funcionario->exibirInformacoes();
echo "\n";

// Aumentando o salário em 10%
$funcionario->aumentarSalario(10);

// Exibindo informações atualizadas
echo "Após aumento salarial de 10%:\n";
$funcionario->exibirInformacoes();
echo "\n";

// Alterando a senha do funcionário
$funcionario->setSenha("novaSenha456");
echo "Senha alterada com sucesso.\n";

// Testando acesso direto (válido e inválido)
// Acesso direto ao nome (válido, pois é público)
echo "\nAcesso direto ao nome: {$funcionario->nome}\n";
