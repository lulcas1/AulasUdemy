<?php
    
    session_start();
    
    //Variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Adminitrativo', 2 => 'Usuário');

    //Usuários do sistema
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@gmail.com', 'senha' => 'adm', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'user@gmail.com', 'senha' => 'user', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'jose@gmail.com', 'senha' => 'user', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@gmail.com', 'senha' => 'user', 'perfil_id' => 2),
    );
    
    foreach($usuarios_app as $user){
    
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }
    
        if($usuario_autenticado){
            echo 'Usuário autenticado.';
            $_SESSION['autenticado'] = 'SIM';
            $_SESSION['id'] = $usuario_id;   
            $_SESSION['perfil_id'] = $usuario_perfil_id;   
            header('Location: home.php');
        }else{
            $_SESSION['autenticado'] = 'NÃO';
            header('Location: index.php?login=erro');
        }
    
?>