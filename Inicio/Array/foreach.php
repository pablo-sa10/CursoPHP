<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $conta1 = [
        "titular" => "pablo",
        "saldo" => 1100
        ];
        
        $conta2 = [
            "titular" => "gustavo",
            "saldo" => 100
        ];
        
        $conta3 = [
            "titular" => "felipe",
            "saldo" => 100000
        ];
        
        $contaCorrente = [$conta1, $conta2, $conta3];
        
        foreach($contaCorrente as $conta){
            echo $conta['titular']. ' ' .$conta['saldo']. "<br>";
        }
    ?>
</body>
</html>