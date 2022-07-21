<?php
require_once '../classes/Conexao.php';
require_once '../classes/Cliente.php';

$cliente = new Cliente();

if (isset($_GET['idCliente'])) {
    $id = $_GET['idCliente'];

    $cli = $id;

    $row = $cliente->listarCliente($cli);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> cadastraCliente </title>

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/icon.png" type="image/x-icon">

</head>

<body>

    <section class="form">
        <div class="container">

            <p class="texto"> Ver <a href="../index.php" class="link-adicionar"> Clientes </a> Adicionados</p>

            <form method="post" action="" autocomplete="off" enctype="multipart/form-data">

                <div class="cx">
                    <input type="text" name="txtnome" placeholder="Nome Do Cliente:" title="Digite o nome" value="<?php echo $row[1] ?>" />
                </div>

                <div class="cx">
                    <input type="text" name="txtcelular" placeholder="(11)95858-6546" title="Digite o número do celular" value="<?php echo $row[2] ?>" />
                </div>

                <button class="btn" type="submit" title="Alterar" name="alterar"> Alterar Cliente </button>

            </form>

        </div>
    </section>

    <?php

    if (isset($_POST['alterar'])) {
        header("Location: ../index.php");
        $nome = $_POST['txtnome'];
        $celular = $_POST['txtcelular'];
    }


    if (!empty($nome) && !empty($celular) ){

        $cliente->setIdCliente($id);
        $cliente->setNomeCliente($nome);
        $cliente->setCelularCliente($celular);

        $cliente->update($cliente);

    }

    ?>


</body>

</html>