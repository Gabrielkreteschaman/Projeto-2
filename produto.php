<?php

    require_once "categoria.php";

    class Produto {
        public $produto;
        public $nome;
        public $marca;
        public $preco;
        public $categoria;

        public function __construct($produto, $nome, $marca, $preco, Categoria $categoria) {
            $this->produto = $produto;
            $this->nome = $nome;
            $this->marca = $marca;
            $this->preco = $preco;
            $this->categoria = $categoria;
        }

        public function getProduto() {
            return $this->produto;
        }

        public function setProduto($produto) {
            $this->produto = $produto;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getMarca() {
            return $this->marca;
        }

        public function setMarca($marca) {
            $this->marca = $marca;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setPreco($preco) {
            $this->preco = $preco;
        }

        public function getCategoria() {
            return $this->categoria;
        }

        public function setCategoria(Categoria $categoria) {
            $this->categoria = $categoria;
        }
    }

?>