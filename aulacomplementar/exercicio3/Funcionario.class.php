<?php
    class Funcionario {

        private $nome;
        private $salario;

        public function __construct(string $nome, float $salario) {
            $this->nome = $nome;
            $this->salario = $salario;
        }

    
        public function aplicarAumento(float $porcentagem): void {
            $aumento = $this->salario * ($porcentagem / 100);
            $this->salario += $aumento;
        }

        public function mostrarDados(): string {
            $salarioFormatado = number_format($this->salario, 2, ',', '.');
            return "Nome do Funcionário: {$this->nome} | Salário Atual: R$ {$salarioFormatado}";
        }
    }
?>

