<?php 
    require_once 'classes/Conexao.php';
    require_once 'classes/Cliente.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> cadastraCliente </title>

    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">


</head>

<body>

    <section class="form">
        <div class="container">

            <p class="texto"> Adicionar <a href="form-cliente.php" class="link-adicionar"> Cliente </a></p>

            <div class="tabela">
                <table>
                    <thead>
                        <tr>
                            <td> Código: </td>
                            <td> Cliente: </td>
                            <td> Celular: </td>
                            <td> ? </td>
                        </tr>
                    </thead>

                    <?php
                    require_once("classes/Cliente.php");
                    try {
                        $cliente = new Cliente();
                        $listaCliente = $cliente->listar();
                    } catch (Exception $e) {
                        echo $e->getMessage();
                    }
                    ?>

                    <tbody id='resultado'>
                        <?php foreach ($listaCliente as $row) { ?>
                            <tr>
                                <td><?php echo $row[0] ?></td>
                                <td><?php echo $row[1] ?></td>
                                <td><?php echo $row[2] ?></td>

                                <td>
                                    <a href="./crud/alterar.php?idCliente=<?php echo $row[0];?>"> <i class="ri-pencil-fill"></i> </a>
                                    <a href="./crud/excluir.php?excluirCliente=<?php echo $row[0];?>"> <i class="ri-delete-bin-6-fill"></i> </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

</body>

</html>