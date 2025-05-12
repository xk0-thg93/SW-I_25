<?php
    class conta{
        public $Nome;
        public $Cpf;
        private $Saldo;
 
        public function Depositar($Valor){
            $this->Saldo+=$Valor;
            $texto = "Deposito realizado. Saldo atual é R$ " . $this->Saldo . "<hr>";
            return $texto;
        }

        public function Sacar($Valor){
            if ($this->Saldo<$Valor){
                return "Saldo insuficiente";
            } else {
                $this->Saldo = $this->Saldo-$Valor;
                $frase = "Saque realizado. Valor atual é de: " . $this->Saldo;
            }
            return $frase;
        }

        public function MostrarDados(){
            echo "Nome: " . $this->Nome . "<br>";
            echo "Cpf: " . $this->Cpf . "<br>";
            echo "Saldo: " . $this->Saldo . "<hr>";
        }


    }



?>