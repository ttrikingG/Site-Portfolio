<?php

session_start();

//chamados(msg)
$mensagens = array();

//abre o arquivo txt
$arquivo = fopen('novoarquivo.txt', 'r');

//enquanto houver registros(linhas) percorre e recupera
while(!feof($arquivo)) {//testa o ultimo arquivo
    
	$registro = fgets($arquivo);
    //echo $registro.'<br/>';
    $mensagens[] = $registro;
}
    
fclose($arquivo);

    //echo '<pre>';
    //print_r($mensagens);
    //echo '</pre>';
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

        <?php
            include("includes/menu.php");
        ?>

        <div class="consultar-msg"><!--inicio Colsulta Mensagem-->
            <h1 class="titulo-form">Consulta de Mensagens</h1>
            
            <?php foreach($mensagens as $valorMensagem) { ?>

            <!--?php echo $valorMensagem. '<br/>'; ?.-->

                <?php

                    $dados_mensagem = explode('#', $valorMensagem);

                    //print_r($dados_mensagem);

                    if($_SESSION['perfil_id'] == 2){

                        if($_SESSION['id'] !=  $dados_mensagem[0]){
                            continue;
                        }
                    }

                    if(count($dados_mensagem) < 2) {
                        continue;    
                    }

                //echo'<pre>';
                //print_r( $valorMensagem);
                //echo'</pre>';
                ?>

                <div class="container-card-msg">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $dados_mensagem[1]?></h3>
                        <p class="card-text"><?php echo $dados_mensagem[2]?>
                    </div>
                </div>

            <?php } ?>

            <div class="container-btn">
                <a href="usuario_menu.php" class="btn-form-msg">Voltar</a>
            </div>

        </div><!--inicio Colsulta Mensagem-->

       <?php
            include("includes/footer.php");
        ?>

    </div>

<script src="script/script.js"></script>
</body>
</html>