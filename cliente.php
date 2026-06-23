<?php

    class Cliente {
        public $nomeCliente;
        public $data;
        public $venda;

        public function getNomeCliente() {
            return $this->nomeCliente;
        }

        public function setNomeCliente($nomeCliente) {
            $this->nomeCliente = $nomeCliente;
        }

        public function getData() {
            return $this->data;
        }

        public function setData($data) {
            $this->data = $data;
        }

        public function getVenda() {
            return $this->venda;
        }

        public function setVenda($venda) {
            $this->venda = $venda;
        }
    }

?>