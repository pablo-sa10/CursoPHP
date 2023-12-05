<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Vamos para o próximo desafio? A ideia agora é exibir a tabuada de determinado número. Ou seja, temos um número armazenado em uma variável qualquer, e queremos exibir o resultado da sua multiplicação de 1 até 9. Se tiver dúvidas, consulte o fórum da Alura. Até a solução!*/

        $numero = 9;

        for($i = 10; $i >= 0; $i--){
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    ?>
</body>
</html>