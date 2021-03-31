<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $parametro = 5;

        switch($parametro){
            case 1:   
                echo 'entrou no case 1';
                break;
            case 2:   
                echo 'entrou no case 2';
                break;
            case 3:   
                echo 'entrou no case 3';
                break;
            default:
                echo 'entrou no default';
                break;
        }
    
    ?>
</body>
</html>