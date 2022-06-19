<?php

$conn = mysqli_connect("localhost","root","","live");

$sidemargin = $_POST['sideMargin'];







$sql = "UPDATE finalchanges set sidemargins = '$sidemargin' where sessionid='123456789';"; 
$nu = mysqli_query($conn,$sql);


echo $sidemargin;

?>