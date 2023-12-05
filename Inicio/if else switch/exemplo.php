<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //if e else

        $idade = 20;

        if ($idade >= 18) {
            echo "Você é maior de idade.";
        } else {
            echo "Você é menor de idade.";
        }
    
        // switch case

        $diaSemana = "quarta";
        
        switch ($diaSemana) {
            case "segunda":
                echo "Dia de começar a semana!";
                break;
            case "quarta":
                echo "Metade da semana!";
                break;
            case "sexta":
                echo "Quase lá!";
                break;
            default:
                echo "Dia não especificado.";
        }
    ?>
</body>
</html>