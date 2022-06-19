<?php

$conn = mysqli_connect("localhost","root","","live");

$headspace = $_POST['headSpace'];







$sql = "UPDATE finalchanges set headingsize = '$headspace' where sessionid='123456789';"; 
$nu = mysqli_query($conn,$sql);


echo $headspace;

?>