<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "baza";

$konekcija = new mysqli($host,$username,$password,$database);
$konekcija->set_charset('utf8');

if ($konekcija->connect_errno){
    exit("Greška u konektovanju na bazu");
}
?>

