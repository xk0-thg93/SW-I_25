<?php
    class Lampada{
        public $Fabricante;
        public $Potencia;
        public $Tensao;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status = True;
        }

        public function Desligar(){
            $this->Status = False;
        }

        public function MostrarDados(){
            echo "Fabricante: " . $this->Fabricante . "; Potencia: " . $this->Potencia . "; Tensão: " . $this->Tensao . "; Cor: " . $this->Cor . "; Status: " . $this->Status . "<hr>";
        }

        public function MostrarLista(){
            echo "Fabricante: " . $this->Fabricante . "<br>";
            echo "Potencia: " . $this->Potencia . "<br>";  
            echo "Tensao: " . $this->Tensao . "<br>"; 
            echo "Cor: " . $this->Cor . "<br>";
            if ($this->Status == True) {
                echo "Está ligada?: SIM";
            } else {
                echo "Está Ligada: NÃO";
            }
        }
    }


?>