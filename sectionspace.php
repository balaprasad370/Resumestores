<?php

$conn = mysqli_connect("localhost","root","","live");

$sectionspace = $_POST['sectionSpace'];







$sql = "UPDATE finalchanges set sectionspacing = '$sectionspace' where sessionid='123456789';"; 
$nu = mysqli_query($conn,$sql);


echo $sectionspace;

?>