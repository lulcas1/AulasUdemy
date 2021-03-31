<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
   
</head>

<body>
    <?php

        // F e V = falso (os 2 teriam q ser verdadeiros)
        if( 5 == 3 AND 10 > 3){
             echo '<h1 style="color:green">Verdadeiro</h1>';;
        }else{
            echo '<h1 style="color:red">Falso</h1>';
        }

        // F OU V = verdadeiro(1 dos 2 é verdadeiro)
        if( 5 == 3 OR 10 > 3){
            echo '<h1 style="color:green">Verdadeiro</h1>';;
        }else{
           echo '<h1 style="color:red">Falso</h1>';
        }

        //Operador XOR -> retorna verdadeiro se apenas uma das expressões for verdadeira e a outra for falsa
        // se as duas forem verdadeiras ou as as 2 forem falsas o resultados será falso
        if( 3 == 4 XOR 10 > 3){
            echo '<h1 style="color:green">Verdadeiro</h1>';;
        }else{
           echo '<h1 style="color:red">Falso</h1>';
        }
       
        // ! inverte o resultado da expressão
        // f = !(f) = v 
        if( !('a' == 'b') ){
            echo '<h1 style="color:green">Verdadeiro</h1>';;
        }else{
           echo '<h1 style="color:red">Falso</h1>';
        }
    ?>
</body>
</html>