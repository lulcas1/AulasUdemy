<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Fixação</title>
</head>
<body>
    
    <!-- 
        Aplicação capaz de verificar se tal pessoa atende aos requisitos para doação de sangue com idade entre(e inclusive) 16 e 69 anos. E com peso maior que 50kg
    -->
    
    <?php
    $idade = 20;
    $peso = 60;

    if ( ($idade >= 16 AND /* && */ $idade <= 69 ) AND /* && */ $peso >= 50){
        echo 'Atende aos requisitos ';
    }else{
        echo 'Não atende aos requisitos';
    }
  
     ?>
</body>
</html>