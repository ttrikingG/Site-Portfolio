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

        <?php
            include("includes/menu.php");
        ?>

        <form class="site-form" action="recebe_cadastro.php" method="post">
            <h1 class="titulo-form">Entre em Contado</h1>
            <p class="subtitulo-form">Para enviar e-mail cadastre-se</p>        

            <label class="rotulo-form" for="">
                <img class="icon-form" src="Icons/email-icon-branco2.png" alt="">
                <input class="input-form" type="email"  name="email" placeholder="E-mail"><!--campo para coletar o e-mail-->
            </label>
                
            <label class="rotulo-form" for="">
                <img class="icon-form" src="Icons/chave1-icon-branca.png" alt="">
                <input class="input-form" type="text"  name="senha" placeholder="Senha"><!--campo para coletar o senha-->
            </label>

            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') {?>
                <div class="text-danger">
                Usuário ou senha inválido(s)
                </div>
            <?php }?>

            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') {?>
                <div class="text-danger">
                Login necessário para acessar.
                </div>
            <?php }?>
            
                <button class="btn-form-cadastro" type="submit">Login</button> <!--botão para enviar-->
                
                <p>Para entrar em contato:<a class="cdtlink" href="">Cadastre-se.</a></p>
            </form>

        <?php
            include("includes/footer.php");
        ?>
        
    </div>

<script src="script/script.js"></script>
</body>
</html>