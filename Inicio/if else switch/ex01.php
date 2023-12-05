<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Crie uma variável $idade e use a estrutura de controle if, else e elseif para exibir mensagens diferentes com base na idade. Se a idade for menor que 18, exiba "Menor de idade". Se for entre 18 e 65, exiba "Adulto". Se for maior que 65, exiba "Idoso".*/

        $idade = 17;

        echo "oq vc é? <br>";
        
        if ($idade < 18){
            echo "menor de idade";
        }elseif ($idade >= 18 and $idade <= 65){
            echo "adulto";
        }else{
            echo "idoso";
        }
    ?>
</body>
</html>