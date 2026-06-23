<?php

    require_once "produto.php";
    require_once "cliente.php";

    class Venda {
        public $venda;
        public $valorTotal;
        public $produtos = array();
        public $cliente;

        public function getVenda() {
            return $this->venda;
        }

        public function setVenda($venda) {
            $this->venda = $venda;
        }

        public function getValorTotal() {
            return $this->valorTotal;
        }

        public function setValorTotal($valorTotal) {
            $this->valorTotal = $valorTotal;
        }

        public function getProduto() {
            return $this->produtos;
        }

        public function setProduto(Produto $produto) {
            $this->produtos[] = $produto;
        }

        public function getCliente() {
            return $this->cliente;
        }

        public function setCliente(Cliente $cliente) {
            $this->cliente = $cliente;
        }

        public function calcularTotal() {
            $total = 0;

            foreach ($this->produtos as $produto) {
                $total += $produto->getPreco();
            }

            $this->valorTotal = $total;
            return $this->valorTotal;
        }
    }

?>