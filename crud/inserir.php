<?php
    require_once('../classes/Cliente.php');

    header("Location: ../index.php");

    $cliente = new Cliente();

    $cliente->setNomeCliente($_POST['txtnome']);
    $cliente->setCelularCliente($_POST['txtcelular']);

    $cliente->cadastrar($cliente);
        
?>