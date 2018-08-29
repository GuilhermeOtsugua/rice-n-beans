<?php
    class Funcionarios {
        public $ID;
        public $Nome;
        public $Telefone;
        public $Identidade;
        public $CLT;
        public $Salario;
        public $Motorista;
        public $Tecnico;
        public $Observacao;

        function __construct($ID, $Nome, $Telefone, $Identidade, $CLT, $Salario, $Motorista, $Tecnico, $Observacao) {
            $this->ID = $ID;
            $this->Nome = $Nome;
            $this->Telefone = $Telefone;
            $this->Identidade = $Identidade;
            $this->CLT = $CLT;
            $this->Salario = $Salario;
            $this->Motorista = $Motorista;
            $this->Tecnico = $Tecnico;
            $this->Observacao = $Observacao;
        }
    }
?>