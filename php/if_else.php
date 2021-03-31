<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
       $fumante_sn = true;

    ?>

    <p>Fumante: <?= $fumante_sn ?> </p>

    <?php
        if(2 == 2){
            echo '<h1 style="color:blue">Verdadeiro</h1>';
        }else{
            echo '<h1>Falso</h1>';
        }
    ?>
</body>



</html>