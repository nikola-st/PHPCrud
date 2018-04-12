<?php

require_once 'config.php';

if($_POST){
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $brindexa = $_POST['brindexa'];
    $smer = $_POST['smer'];
    
    $id= $_POST['id'];
    
    $sql = "UPDATE student SET brindexa = '$brindexa', ime = '$ime', prezime = '$prezime' , smer = '$smer' WHERE id ={$id}";
    
    if($con->query($sql)===true){
        echo "<p>Uspesno azuriranje</p>";
        echo "<a href='index.php'><button type='button'>Na početak</button></a>";
    }else{        
        echo "Greska: ".$con->error;
        
    }
    
    $con->close();
}

