<?php
    $pdo = new PDO('sqlsrv:Server=TAR221\\TARAMPS;Database=youtube','sa','@TAR2023');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //delete
    if(isset($_GET['delete'])){
        $id = (int)$_GET['delete'];
        $sql = $pdo->prepare("DELETE FROM youtube WHERE id=$id");
        $sql->execute();
        echo 'deletado com sucesso';
    }

    //Insert 
    if(isset($_POST['nome'])){
        $sql = $pdo->prepare("INSERT INTO youtube VALUES (?,?)");
        $sql->execute(array($_POST['nome'], $_POST['email']));
        echo 'inserido com sucesso';
    }

    //atualizar
    $nome = 'Pablo';
    $pdo->exec("UPDATE youtube SET nome='$nome' where id=9");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome">
        <input type="text" name="email">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    $sql = $pdo->prepare('SELECT * FROM youtube');
    $sql->execute();

    $fetchClientes = $sql->fetchAll();

    foreach($fetchClientes as $value => $clientes){
        echo '<a href="?delete='.$clientes['id'].'">(x)</a>'.$clientes['nome'].' | '.$clientes['email'];
        echo '<hr>';
    }

    $sql
?>