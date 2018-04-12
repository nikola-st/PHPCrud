<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="funkcije.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Nov student</title>
    </head>
    <body>
        <div id="unos">
        <form name="unos" action="create.php" method="post" onsubmit="return validacija()">
            
            <label for="ime">Ime</label>
            <input type="text" name="ime" placeholder="IME">
           
            <label for="prezime">Prezime</label>
            <input type="text" name="prezime" placeholder="PREZIME">
          
            <label for="brindexa">Br indexa</label>
            <input type="text" name="brindexa" placeholder="BROJ INDEXA">
          
            <label for="smer">Smer</label>
            <input type="text" name="smer" placeholder="SMER">
      
            <button type="submit">Dodaj</button>
            <a href="index.php"><button type="button">Nazad</button>
            
        </form>
        </div>
    </body>
</html>
<?php 
 
require_once 'config.php';
 
if($_POST) {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $brindexa = $_POST['brindexa'];
    $smer = $_POST['smer'];
 
    $sql = "INSERT INTO student (ime, prezime, brindexa, smer) VALUES ('$ime', '$prezime', '$brindexa', '$smer')";
    if($con->query($sql) === TRUE) {
        echo "<p>Uspesno ste dodali studenta</p>";
        echo "<a href='index.php'><button type='button'>Početak</button></a>";
    } else {
        echo "Greška: ". $con->connect_error;
    }
 
    $con->close();
}