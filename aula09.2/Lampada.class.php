<?php
    class Lampada{
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status = True;
        }
         public function Desligar(){
            $this->Status = False;
        }
         public function MostrarDados(){
            echo "FAABRICANTE: " . $this->Fabricante . "<br>";
            echo "TENSÃO: " . $this->Tensao . "<br>";
            echo "POTÊNCIA: " . $this->Potencia . "<br>";
            echo "COR: " . $this->Cor . "<br>";
            if($this->Status == 1){
                echo"status da lampada: Ligada <br>";
            }else{
                echo"status da lampada: Desligada <br>";
            }

        }
    }



?>