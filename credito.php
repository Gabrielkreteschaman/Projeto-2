<?php
    require_once "formaDePagamento.php";

    class Credito implements FormaDePagamento {

        public function pagar() {
            return "Crédito";
        }
    }
?>