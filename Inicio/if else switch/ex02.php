<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Crie duas variáveis, $nota1 e $nota2, e calcule a média. Use a estrutura if e else para exibir "Aprovado" se a média for maior ou igual a 7 e "Reprovado" caso contrário.*/

        /*$nota1 = 9;
        $nota2 = 8;

        echo 'sua nota: ' . $media = ($nota1 + $nota2) / 2;

        if($media < 7 and $media > 0)
            echo "<br>reprovado";
        elseif($media >= 7 and $media <= 10)
            echo "<br>aprovado";
        else
            echo "<br>não definido";*/
        
        $mes = "fevereiro";

        $mes31Dias = ["janeiro", "março", "maio", "julho", "agosto", "outubro", "dezembro"];
        $mes30dias = ["abril", "junho", "setembro", "novembro"];
        $fevereiro = "fevereiro";

        switch (true){
            case in_array(strtolower($mes), $mes31Dias):
                echo "Mês com 31 dias";
                break;
            case in_array(strtolower($mes), $mes30dias):
                echo "Mês com 30 dias";
                break;
            case strtolower($mes) == $fevereiro:
                echo "Fevereiro tem 28 dias, ou 29 dias em ano bissexto";
                break;
            default:
                echo "Mês não especificado";
        }
    ?>
</body>
</html>