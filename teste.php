<?php

    require_once "categoria.php";
    require_once "produto.php";
    require_once "pessoaFisica.php";
    require_once "pessoaJuridica.php";
    require_once "venda.php";

    $categoria = new Categoria();
    $categoria->setCategoria(1);
    $categoria->setDescricao($_POST["categoria"]);

    $produto = new Produto(
        1,
        $_POST["nomeProduto"],
        $_POST["marca"],
        $_POST["preco"],
        $categoria
    );

    if ($_POST["tipoCliente"] == "fisica") {

        $cliente = new PessoaFisica();
        $cliente->setNomeCliente($_POST["nomeCliente"]);
        $cliente->setCpf($_POST["cpf"]);

        $tipo = "Pessoa Física";
        $documento = $cliente->getCpf();

    } else {

        $cliente = new PessoaJuridica();
        $cliente->setNomeCliente($_POST["nomeCliente"]);
        $cliente->setCnpj($_POST["cnpj"]);

        $tipo = "Pessoa Jurídica";
        $documento = $cliente->getCnpj();
    }

    $cliente->setData(date("d/m/Y"));

    $venda = new Venda();
    $venda->setVenda(1);
    $venda->setCliente($cliente);
    $venda->setProduto($produto);
    $venda->calcularTotal();

    echo "<h1>Venda Realizada</h1>";

    echo "Cliente: " . $cliente->getNomeCliente() . "<br>";
    echo "Tipo: " . $tipo . "<br>";
    echo "Documento: " . $documento . "<br>";
    echo "Data: " . $cliente->getData() . "<br><br>";

    echo "<h2>Produto Comprado</h2>";
    echo "Produto: " . $produto->getNome() . "<br>";
    echo "Marca: " . $produto->getMarca() . "<br>";
    echo "Categoria: " . $produto->getCategoria()->getDescricao() . "<br>";
    echo "Preço: R$ " . number_format($produto->getPreco(), 2, ",", ".") . "<br><br>";

    echo "<strong>Total da Venda: R$ " . number_format($venda->getValorTotal(), 2, ",", ".") . "</strong>";

?>