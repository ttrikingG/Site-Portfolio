<?php
   
    session_start();

    //$tituloTexto = explode('#', $_POST['titulo-texto']);

    //$mensagemTexto = explode('#', $_POST['mensagem-texto']);

    $tituloTexto = str_replace('#', '-', $_POST['titulo-texto']);

    $mensagemTexto = str_replace('#', '-', $_POST['mensagem-texto']);

    //echo $texto;

    $texto = $_SESSION['id'] . '#' . $tituloTexto . '#' . $mensagemTexto . PHP_EOL;

    //abrindo arquivo
    $arquivo = fopen('novoarquivo.txt', 'a');

    //lendo o arquivo 
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);

    header('Location: pagina_mensagem _enviada.php');

?>