<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Pós incremento</h3>
    <?php

    $a = 7;
    echo "O valor de A é $a <br>";
    echo ' O valor de A pós incremento é ' .$a++.' <br>';
    echo "O valor atualizado de A é $a";

    ?>

<h3>Pré incremento</h3>
    <?php

    $a = 7;
    echo "O valor de A é $a <br>";
    echo ' O valor de A pós incremento é ' .++$a.' <br>';
    echo "O valor atualizado de A é $a";

    ?>

    <h3>Pós Decremento</h3>
        <?php

        $a = 7;
        echo "O valor de A é $a <br>";
        echo ' O valor de A pós incremento é ' .$a--.' <br>';
        echo "O valor atualizado de A é $a";

        ?>

    <h3>Pré Decremento</h3>
        <?php

        $a = 7;
        echo "O valor de A é $a <br>";
        echo ' O valor de A pós incremento é ' .--$a.' <br>';
        echo "O valor atualizado de A é $a";

        ?>
</body>
</html>