
<?php

$conn = mysqli_connect("localhost","root","","live");

$fontsize = $_POST['delete_id'];







$sql = "UPDATE finalchanges set fontsize = '$fontsize' where sessionid='123456789';"; 
$nu = mysqli_query($conn,$sql);


echo $fontsize;

?>