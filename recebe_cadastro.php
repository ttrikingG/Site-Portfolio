<?php

    session_start();

    //váriavel que verifica se autenticação foi feita
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;


    $perfis = array(1 => 'administrativo', 2 => 'Usuário');

    //usuários do sistema (depois será trocado pelo banco de dados)
    $usuario_app = array(
        array('id' => 1, 'email' => 'hailtomadm@gmail.com', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'hailtomteste@gmail.com', 'senha' => '123457', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'hailtomteste3@gmail.com', 'senha' => '123458', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'Connectcorpteste@gmail.com', 'senha' => '987654', 'perfil_id' => 2),
    );

    //função para percorrer a lista e verificar usuário e senha correspondente
    foreach($usuario_app as $user){
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: usuario_menu.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: cadastro.php?login=erro');
    }
?>