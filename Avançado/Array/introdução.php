<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $idadeList = [22, 30, 5, 47];
        //$primeiraIdade = $idadeList[0];

        //echo "$primeiraIdade";
        //"<br<br><br>";
        for($i = 0; $i < count($idadeList); $i++){
            echo "$idadeList[$i]<br>";
        }
    ?>
</body>
</html>