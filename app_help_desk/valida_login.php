<?php
    //Variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    //Usuários do sistema
    $usuarios_app = array(
        array('email' => 'adm@gmail.com', 'senha' => 'adm'),
        array('email' => 'user@gmail.com', 'senha' => 'user')
    );
    
    foreach($usuarios_app as $user){
    
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }
    
        if($usuario_autenticado){
            echo 'Usuário autenticado.';
        }else{
            header('Location: index.php?login=erro');
        }
    
?>