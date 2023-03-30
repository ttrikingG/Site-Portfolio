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

        <div class="Aboutxt"><!--conteúdo sobre-->
            <h1>About-me</h1>
            <img class="imgpfl" src="img/profile_tom_320x240.jpg">
            
            <p style="text-align:center"> Bem vindo ao meu laboratório, espaço dedicado a divulgação, a criação e a evolução do
            meu aprendizado como Desenvolvedor.</p>

            <hr>

            <p style="text-align:justify">Ao longo dos últimos anos, logo após minha formação acadêmica (Tecnologia em
                Processos Químicos), comecei minha saga de estudos para concursos públicos onde algo um tanto
                quanto peculiar aconteceu, na medida em que avançava nos estudos certas matérias chamavam me a
                atenção, em especial, a disciplina “informática básica” de longe destacou-se (era a única matéria
                que fora da parte teórica tinha aplicação pratica no mundo real) com tais estudos pude descobrir o
                universo Opensourch instalei minha primeira distro Linux(Ubuntu) e comecei a desbravar esse
                novo mundo, mas isso era só a ponta do icebergue, posteriormente tive contado com o edital da
                Polícia Federa(PF) no qual informática veio com conteúdo completamente diferente do Habitual
                cobrando: banco de dados, programação, redes etc…, era conteúdo novo,complexo,extenso e difícil,
                alguns temas nunca tinha visto falar (fui reprovado na PF) mas  continuei avançando nos estudos.
                Entre outras reprovações, como uma coisa puxa outra, fiquei por dentro do universo dos “Devs”  
                nesse momento comecei a estudar sobre o assunto, e de lá pra cá estou me dedicando a aprender
                HTML5, CSS3, Javascript, PHP, "SQLs", python dentre outros.
            </p>

            <p></p>

            <p style="text-align:justify"> Por fim, atualmente (trabalho como motoboy) e sigo com meus estudos para concurso,
                porém paralelamente estou dedicando meu tempo para aprender a ser um “Dev”, sendo assim mais
                uma vez seja bem vindo ao meu lab,<i> and Let’s Work Together.</i> 
            </p>

            <hr>

            <p 
            style="text-align:right"><i>Desistir nunca foi uma opção.</i>
            </p>

            <div class="btnsb">
                <button class="closesb" onclick="closesb('Aboutxt')">Close</button>
            </div>
            
        </div><!--conteúdo sobre-->

        <div class="glport">
            <h1>Portfólio</h1>
            <main>
                <div class="gallery-container">
                    <a href="../Avifer/index.html" class="gallery-itens" target="_blank">
                        <img src="" alt="Avifer">  
                    </a>
                    <a href="../meu-site/index.html" class="gallery-itens">
                        <img src="" alt="Meu Site">
                    </a>
                    <a href="/home/tom/Documentos/Sites/tomsite/image/azul-project.jpg" class="gallery-itens">
                        <img src="" alt="Corretora Irmãos Arantes">
                    </a>
                    <a href="/home/tom/Documentos/Sites/tomsite/image/THUNDER.jpg" class="gallery-itens">
                        <img src="" alt="">
                    </a>
                </div>

                <div class="btnclosegl">
                    <button class="btncloseglr" onclick="closeglr('glport')">Close</button>
                </div>
            </main>
        </div><!--Galeria portifolio-->

        <p></p>

        <div class="menu-f">
            <button class="f1" onclick="toggle1('Aboutxt')">About-me</button>
            <button class="f2" onclick="toggle2('glport')">Portfólio</button>
            <a href="curriculo.php"><button class="f3">Curriculo</button></a>
            <button class="f4"onclick="toggle4('ctf')">Certification</button>
        </div><!--botões Verticais-->

        <div class="ctf">
            <h1>Certification</h1>
            <figure class="positiongif2"><img src="GiFs/bilding_animation.gif" heigth="130px" width="130px"></figure>
            <h3>Em construção</h3>

            <div class="btnctf">
                <button class="closesb" onclick="closectf('Aboutxt')">Close</button>
            </div>
        </div>

        <?php
            include("includes/footer.php");
        ?>

    </div>

<script src="script/script.js"></script>
</body>
</html>