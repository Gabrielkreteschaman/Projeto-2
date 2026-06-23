<?php

    require_once "cliente.php";

    class PessoaJuridica extends Cliente {
        private $cnpj;

        public function getCnpj() {
            return $this->cnpj;
        }

        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }

        public function getDocumento() {
            return $this->cnpj;
        }
    }

?>