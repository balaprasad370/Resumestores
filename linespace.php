<?php

$conn = mysqli_connect("localhost","root","","live");


$linespacing = $_POST['line_spacing'];





$sql = "UPDATE finalchanges set  linespacing = '$linespacing' where sessionid='123456789';"; 
$nu = mysqli_query($conn,$sql);


echo $linespacing;

?>