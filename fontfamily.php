<?php

$conn = mysqli_connect("localhost","root","","live");

$fontfamily = $_POST['fontFamily'];







$sql = "UPDATE finalchanges set fontstyle = '$fontfamily' where sessionid='123456789';"; 
$nu = mysqli_query($conn,$sql);


echo $fontfamily;

?>