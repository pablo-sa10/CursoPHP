<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Titular{
            private $titular;
 
            public function __construct(Funcionario $titular){
                $this->titular = $titular;
            }

            public function getCpf(){
                return $this->titular;
            }
        }
    ?>
</body>
</html>