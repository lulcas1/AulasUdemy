<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php 

        //string 
        $nome = 'Lucas Araujo';
        //int
        $idade = 25;
        //float
        $peso = 25.2;
        //boolean
        $fumante_sn = true //(true = 1) ou (false = 0)

    ?>
</body>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p> 
    <p>Idade: <?= $idade ?></p> 
    <p>Peso: <?= $peso ?> kg</p> 
    <p>Fumante: <?= $fumante_sn ?></p> 

   
</html>