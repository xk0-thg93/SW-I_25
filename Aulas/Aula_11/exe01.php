<?php
    class Pessoa {
        private $Nome;
        private $Preco;
        private $Quant;

        public function __construct($nome, $preco = 1, $quant = 1){
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Quant = $quant;
        }

        public function getNome(){
            return $this->Nome;
        }

        public function setNome($nome){
            $this->Nome = $nome;
        }

        public function getPreco(){
            return $this->Nome;
        }

        public function setPreco($preco){
            $this->Preco = $preco;
        }

        public function AddEstoque($quant){

        }

        public function RemEstoque($quant){
            if (($quant > 0) && (($this->Quant>=$quant))){
                $this->Quant-=$quant;
            } elseif ($this->Quant<$quant){
                echo "Não temos produtos no estoque o suficiente";
            } else {
                echo "O valor deve ser positivo";
        }

        public function MostarTudo (){
            echo "Nomedo prduto: " . $this->Nome;
            echo "Preco do produto: " . $this->Preco;
            echo "Quantidade do prduto: " . $this->Quant;
        }

    }


?>