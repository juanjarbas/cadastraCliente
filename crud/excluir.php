<?php
    require_once('../classes/Cliente.php');
    require_once('../classes/Conexao.php');


    if(isset($_GET['excluirCliente'])){
        header("Location: ../index.php");
        $idCliente = $_GET['excluirCliente'];

        $cliente = new Cliente();

        $cliente->delete($idCliente);
    }

?>

