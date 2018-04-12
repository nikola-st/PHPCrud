<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="funkcije.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>CRUD app</title>
        
    </head>
    <body onload="alternate('tabela')">
        <div id="unos">
        <h2>CRUD App</h2>
        <table id="tabela" border="1" cellspasing="0" cellpadding="5">
            <thead>
                <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Br indexa</th>
                <th>Smer</th>
                <th>Opcije</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                require_once 'config.php';
                $sql = "SELECT * FROM student ORDER BY id DESC";
                $result = $con->query($sql);
                
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr>
                        <td>". $row['ime']."</td>
                        <td>". $row['prezime']."</td>
                        <td>". $row['brindexa']."</td>
                        <td>". $row['smer']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='button'>Azuriraj</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button'>Obrisi</button></a>
                        </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'><center>Nema podataka</center></td></tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <a href="create.php"><button type="button">Dodaj novog studenta</button></a>
        </div>
    </body>
</html>
