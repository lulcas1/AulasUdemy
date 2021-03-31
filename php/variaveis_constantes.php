<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
        // função define('NOME_VARIAVEL', 'valor_variavel') 
        //Variavel constante, não pode ser alterada ao longo do código
        //Escrever variaveis constantes em Caps lock
        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_dev');
        define('BD_SENHA', 'senha_dev');

        echo BD_URL .'<br/>';
        echo BD_USUARIO .'<br/>';
        echo BD_SENHA .'<br/>';

    ?>
</body>



</html>