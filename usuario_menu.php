<?php
    session_start();

    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: cadastro.php?login=erro2');
    }
?>

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

        <br>

        <div class="user-conteiner">

            <div class="user-menu-card">
                <form class="form-foto-profile" method="post" action="" enctype="multipart/form-data">
                    <div>
                        <img class="avatar" style=" width:100px; height:100px;" src="Icons/camera_icon.png" alt="">
                    </div>
                    <input class="input-avatar" type="file" name="input-avatar" accept="image/png, image/jpeg" onchange="previewimagem()">
                </form>
                <h1 class="titulo-form">Bem Vindo!!!</h1>
                <p class="user-text-p">ao seu perfil</p>
                <p><img class="michaelj-gif" href="#" src="GiFs/bfR.gif"></p>
            </div>

            <div class="menu-user-lateral">
                <a class="mulat-btn1" href="index.php">Home/Início</a>
                <a class="mulat-btn1" href="#msg-anchor">Contact-me</a>
                <a class="mulat-btn1" href="vendas.php">Shopping</a>
                <a class="mulat-btn1" href="lib.php">My Library</a>
                <a class="mulat-btn1" href="workst.php">Work-Station</a>
                <div class="container-btn">
                    <a href="index.php" class="btn-form-msg">Voltar</a>
                    <a href="consulta_mensagem.php" class="btn-form-msg">Consulta</a>
                </div>
            </div>
        </div>

        <br>

        <div class="user-conteiner2">
            <form class="meusite-form" method="post" action="registra_mensagem.php"><!--inicio formulário Mensagem-->
                <h1 class="titulo-form"><a name="msg-anchor">Mensagem</a></h1>

                <label class="rotulo-form" for="">
                    <img class="icon-form" src="Icons/Lapis-icon-branco.png" alt="">
                    <input name="titulo-texto" class="input-form" type="text" placeholder="Titulo" 
                    required oninvalid="this.setCustomValidity('Campo Obrigatório')" 
                    onchange="try{setCustomValidity('')}catch(e){}">
                </label>
                
                <label class="rotulo-form" for="">
                    <img class="icon-form" src="Icons/Lapis-icon-branco.png" alt="">
                    <input name="mensagem-texto" class="input-form" type="text" placeholder="Mensagem" 
                    required oninvalid="this.setCustomValidity('Campo Obrigatório')" 
                    onchange="try{setCustomValidity('')}catch(e){}">
                </label>

                <div class="container-btn">
                    <button class="btn-form-msg" type="submit">Enviar</button>
                </div>

                <p class="texto-form">Ou acesse minhas redes sociais.</p>
            </form><!--inicio formulário Mensagem-->
        </div>

       <?php
            include("includes/footer.php");
        ?>

    </div>


<script src="script/script.js"></script>
</body>
</html>