<?php
    class Pessoa{
        //atributo da classe
        public $Nome;
        public $Peso;
        public $Altura;

        //MÉTODOS
        public function MostrarDados(){
            echo "nome da pessoa: " . $this->Nome . "<br>";
            echo "peso da pessoa: " . $this->Peso . "<br>";
            echo "altura da pessoa: " . $this->Altura . "<br>";
            echo "<br>" . "<hr>" . "<br>" ;
        }
    }  
?>