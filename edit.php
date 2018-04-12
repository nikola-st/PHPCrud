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
        <title>Azuriraj</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="unos">
            
        <form action="update.php" method="post">
            
            <label for="ime">Ime</label>
            <input type="text" name="ime" placeholder="IME" value="<?= $data['ime']?>">
           
            <label for="prezime">Prezime</label>
            <input type="text" name="prezime" placeholder="PREZIME" value="<?= $data['prezime']?>">
            
            <label for="brindexa">Br indexa</label>
            <input type="text" name="brindexa" placeholder="BROJ INDEXA" value="<?= $data['brindexa']?>">
            
            <label for="smer">Smer</label>
            <input type="text" name="smer" placeholder="SMER" value="<?= $data['smer']?>">
           
            <input type="hidden" name="id" value="<?= $data['id']?>" />
            
            <button type="submit">Azuriraj</button>
            <a href="index.php"><button type="button">Nazad</button>
                
            </div>
        </form>
    </body>
</html>
