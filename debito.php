<?php
    require_once "formaDePagamento.php";

    class Debito implements FormaDePagamento {

        public function pagar() {
            return "Débito";
        }
    }
?>