<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $frutas = array("maça", "banana", "abacaxi", "laranja");

        for ($i = 0; $i < count($frutas); $i++){
            echo "Fruta: $frutas[$i]<br>";
        }
    ?>
</body>
</html>