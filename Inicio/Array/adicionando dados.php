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
       /*$idadeList[count($idadeList)] = 200; 
       
       foreach($idadeList as $idade){
            echo "$idade <br>"; 
       }*/
        $cont = 10;
        while(count($idadeList) < 20){
            $cont++;
            $idadeList[] = $cont;
            if($idadeList[0] = 1000);
       }
        foreach ($idadeList as $idade) {
             echo "$idade <br>";
            }
    ?>
</body>
</html>