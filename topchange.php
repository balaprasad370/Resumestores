<?php

$conn = mysqli_connect("localhost","root","","live");

$topbottom_margin = $_POST['top_val'];







$sql = "UPDATE finalchanges set topmargin = '$topbottom_margin' where sessionid='123456789';"; 
$nu = mysqli_query($conn,$sql);


echo $topbottom_margin;

?>