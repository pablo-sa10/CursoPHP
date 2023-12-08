<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idadeList = [21, 23, 19, 25, 30, 41, 18];

        list($idadeVinicius, $idadePablo, $idadeGabi) = $idadeList;

        foreach($idadeList as $idade){
            echo "$idade<br>";
        }
    ?>
</body>
</html>