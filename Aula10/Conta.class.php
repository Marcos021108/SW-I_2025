<?php
    class conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if($valor>$this->Saldo){
                return "SALDO INSULFICIENTE!";
            }else {
                $this->Saldo -= $valor;
                $texto = "Operação realizada com sucesso. Saldo atual é de R$: ". $this->Saldo;
                return $texto;
            }           
        }
        public function Depositar($valor){
            $this->Saldo += $valor;
            $texto = "Operação realizada com sucesso. Saldo atual é de R$: ". $this->Saldo;
            return $texto;
        }
        public function ConsultSaldo(){
            echo"NOME: ". $this->Nome. "<br>";
            echo"CPF: ". $this->Cpf. "<br>";
            echo"SALDO: ". $this->Saldo. "<br>";
        }
    }



?>