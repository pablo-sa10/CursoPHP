<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Dentro do projeto "php-primeiros-passos", criaremos uma nova pasta chamada "desafios". O primeiro desafio será executar um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100. Uma dica: para saber se um número é ímpar ou não no PHP, podemos utilizar o operador de resto de divisão por 2 - se esse resto for igual a 0, o número é par; caso contrário, ele é ímpar.*/

        /*$contador = 0;

        for ($i = 0; $i < 100; $i++){
            $contador++;
            if ($contador % 2 == 0){
                continue;
            }else{
                echo "$contador<br>";
            }
        }*/

        $cont = 0;
        $j = 0;

        while($j < 100){
            $cont++;
            $j++;
            if ($cont % 2 == 0){
                continue;
            } else{
                echo "$cont<br>";
            }
        }
    ?>
</body>
</html>