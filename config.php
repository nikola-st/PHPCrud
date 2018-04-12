<?php
$server = "localhost";
$username = "root";
$pass = "";
$baza = "studenti";

$con = new mysqli($server, $username, $pass, $baza);

if($con->connect_error){
    die("Konekcija nije uspesna: " . $con->connect_error);
}