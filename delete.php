<?php 
   require_once 'config.php'; 

   if($_POST)
    {
        $id = $_POST['id'];

        $sql = "DELETE FROM student where id = {$id}";

        if($con->query($sql) === true)
            {
                echo "<p>Student uspesno obrisan!</p>";
                echo "<a href='index.php'><button type='button'>Na početak</button></a>";
            } 
        else 
            {
                echo "Greska : " . $con->error;
            }

        $con->close();
    
    }