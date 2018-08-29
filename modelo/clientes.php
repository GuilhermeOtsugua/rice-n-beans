<?php
    class Clientes {
        public $ID;
        public $Nome;
        public $Telefone;
        public $Cidade;
        public $Estado;
        public $Endereco;
        public $CPFouCNPJ;
        public $Email;

        function __construct($ID, $Nome, $Telefone, $Cidade, $Estado, $Endereco, $CPFouCNPJ, $Email) {
            $this->ID = $ID;
            $this->Nome = $Nome;
            $this->Telefone = $Telefone;
            $this->Cidade = $Cidade;
            $this->Estado = $Estado;
            $this->Endereco = $Endereco;
            $this->CPFouCNPJ = $CPFouCNPJ;
            $this->Email = $Email;
        }
    }
?>