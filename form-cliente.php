<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> cadastraCliente </title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/icon.png" type="image/x-icon">

</head>

<body>

    <section class="form">
        <div class="container">

        <p class="texto"> Ver <a href="index.php"  class="link-adicionar"> Clientes </a> Adicionados</p>

            <form name="cliente" method="post" autocomplete="off" action="crud/inserir.php">
                <div class="cx">
                    <input type="text" name="txtnome" placeholder="Nome Do Cliente:" title="Digite o nome" required />
                </div>

                <div class="cx">
                    <input type="text" name="txtcelular" placeholder="(11)95858-6546" title="Digite o número do celular" required />
                </div>

                <button class="btn" type="submit" title="Cadastrar" name="cadastrar"> Cadastrar </button>
            
            </form>

        </div>
    </section>


</body>

</html>