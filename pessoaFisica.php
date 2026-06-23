<?php

    require_once "cliente.php";

    class PessoaFisica extends Cliente {
        private $cpf;

        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function getDocumento() {
            return $this->cpf;
        }
    }

?>