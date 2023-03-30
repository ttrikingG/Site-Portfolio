<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ttricking.g</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

        <?php
            include("includes/header.php");
        ?>

        <form class="meusite-form" method="post" action="registra_mensagem.php"><!--inicio formulário Mensagem-->
            <h1 class="titulo-msg-sucesso">Mensagem Enviada com Sucesso</h1>
            <p>Click abaixo para enviar outra menssagem ou retornar ao início</p>

            <div class="container-btn">
                <a href="usuario_menu.php" class="btn-form-msg">Voltar</a>
                <a href="usuario_menu.php" class="btn-form-msg">Reenviar</a>
            </div>

            <p class="texto-form">Ou acesse minhas redes sociais.</p>
        </form><!--inicio formulário Mensagem-->

       <?php
            include("includes/footer.php");
        ?>

    </div>

<script src="script/script.js"></script>
</body>
</html>