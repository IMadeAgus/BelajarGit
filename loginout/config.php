<?php
$server='localhost';
$user = 'root';
$pass = '';
$database ='dbsewamobil';

$conn = mysqli_connect($server,$user,$pass,$database);

if(!$conn){
    die("<script> alert('Coneciton failed)</script>");
}
?>