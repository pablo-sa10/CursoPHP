<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Agora que solucionamos mais esse desafio, vamos aumentar a dificuldade. A ideia é, a partir de uma altura e peso definidas, calcularmos o IMC. Para isso, você precisará pesquisar a fórmula na internet (que é bastante simples).

        A partir dessa fórmula e da tabela de IMCs, o código deverá exibir se o usuário está abaixo, dentro ou acima do nível recomendado. Faça esse exercício com calma, tire suas dúvidas no fórum e confira o resultado no próximo vídeo. */

        $altura = 1.82;
        $peso = 70;

        $imc = $peso / ($altura)**2;

        if($imc > 0 and $imc < 18.5){
            echo "seu imc é $imc: está abaixo do peso";
        } else if ($imc >= 18.5 and $imc < 25){
            // echo "seu imc é :{number_format($imc, 2)}: está com peso noraml";
            echo "seu imc é " . number_format($imc, 2) . ": está com peso noraml";
        } else if ($imc >= 25 and $imc < 30){
            echo "seu imc é $imc: está com o peso acima do normal";
        } else if ($imc >= 30){
            echo "seu imc é $imc: está obeso";
        } else {
            echo "seu imc é $imc: peso inexistente";
        }
    ?>
</body>
</html>