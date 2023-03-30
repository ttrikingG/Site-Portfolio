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

        <div class="topnav"> <!--Menu de Navegação VENDAS-->
            <a class="btn-home" href="index.php"><img src="Icons/home_icon.png" alt=""></a>
            <a href="#">Produtos</a>
            <a href="cadastro.php">Serviços</a>
            <a href="cadastro.php">Contato</a>
            <a href="#">Sobre</a>
            <div class="search_container">
                <form action="#" method="post">
                    <input type="text" name="search" placeholder="Pesquisa" required>
                    <button type="submit">Buscar</button>
                </form>
            </div>
        </div>
 
        <div class="container-body">
            <div class="body-lateral">
                <div class="container-card">
                    <div class="card1">
                        <img class="img-vendas" src="img/em-construção.png" alt="">
                    </div>

                    <h1>Site One Page</h1>
                    <p>Reúne todas as informações<br>

                    <div class="btn-do-card">
                        <button class="btn-card1">Carrinho</button>
                        <button class="btn-card2">Comprar</button>
                    </div>
                </div>
            </div>

            <div class="body-lateral">
                <div class="container-card">
                    <div class="card1">
                        <img class="img-vendas" src="img/em-construção.png" alt="">
                    </div>

                    <h1>Blog</h1>
                    <p>teste descrição do produto</p>

                    <div class="btn-do-card">
                        <button class="btn-card1">Carrinho</button>
                        <button class="btn-card2">Comprar</button>
                    </div>
                </div>
            </div>

            <div class="body-lateral">
                <div class="container-card">
                    <div class="card1">
                        <img class="img-vendas" src="img/em-construção.png" alt="">
                    </div>

                    <h1>Loja Virtual</h1>
                    <p>teste descrição do produto</p>

                    <div class="btn-do-card">
                        <button class="btn-card1">Carrinho</button>
                        <button class="btn-card2">Comprar</button>
                    </div>
                </div>
            </div>

            <div class="body-lateral">
                <div class="container-card">
                    <div class="card1">
                        <img class="img-vendas" src="img/em-construção.png" alt="">
                    </div>

                    <h1>Instituciaonal</h1>
                    <p>teste descrição do produto</p>

                    <div class="btn-do-card">
                        <button class="btn-card1">Carrinho</button>
                        <button class="btn-card2">Comprar</button>
                    </div>
                </div>
            </div>

        </div>

        <?php
            include("includes/menu.php");
        ?>

        <?php
            include("includes/footer.php");
        ?>

    </div>

<script src="script/script.js"></script>
</body>
</html>
