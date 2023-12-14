<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        /*function exibirMensagem($mensagem){
            echo "$mensagem <br>";
        }

        function calculo($numero){
            $resultado = $numero[1] * $numero[2];
            exibirMensagem($resultado);
        };

        $vetores = [
            'impares' => [
                1, 3, 4, 5, 7, 9
            ],
            'pares' => [
                2, 4, 6, 8, 10
            ]
            ];

        $vetores['impares'] = calculo($vetores['impares']);

        //foreach($vetores as $vetor => $numeros){
            //calculo($numero[1], $numero[2]);*/
        //}

        function processoCalculo($numeros){
            $somaPares = 0;
            $multiplicacaoImpares = 1;

           /* for($i = 0; $i < count($numeros); $i++){
                if($numeros[$i] % 2 == 0){
                    $somaPares += $numeros[$i];
                }
                else{
                    $multiplicacaoImpares *= $numeros[$i];
                }
            }*/
            $i = 0;
            while($i < count($numeros)){
                if($numeros[$i] % 2 == 0){
                    $somaPares += $numeros[$i];
                }
                else{
                
                    $multiplicacaoImpares *= $numeros[$i];
                }
                $i++;
            }
            echo "$somaPares<br>";
            echo "$multiplicacaoImpares<br><br>";

            if ($somaPares > $multiplicacaoImpares){
                echo "$somaPares é maior que $multiplicacaoImpares<br>";
            }
            else if($somaPares == $multiplicacaoImpares){
                echo "os numeros sao iguais";
            }
            else{
                echo "$multiplicacaoImpares é maior que $somaPares";
            };

        }

        $vetor = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        processoCalculo($vetor);
    ?>
</body>
</html>