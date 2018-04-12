<?php

require_once 'config.php';

if($_GET['id']){
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM student WHERE id = {$id}";
    $result = $con->query($sql);
    
    $data = $result->fetch_assoc();
    
    $con->close();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Obriši</title>
    </head>
    <body>
        <div id="unos">
        <h3>Da li ste sigurni da zelite da obrisete studenta: <?= $data['ime']?>?</h3>
        <form action="delete.php" method="post">
            
            <input type="hidden" name="id" value="<?= $data['id']?>"/>
            
            <button type="submit">Obriši</button>
            <a href='index.php'><button type='button'>Odustani</button></a>
        </form>
        </div>
    </body>
</html>