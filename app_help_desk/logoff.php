<?php
    session_start();    
    session_destroy();
    header('Location: index.php');

    //remover índices do array de sessão
    //unset() -> remove o índice apenas se existir

    //destruir a variável de sessão
    //session_destroy() 
?>