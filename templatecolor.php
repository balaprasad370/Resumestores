
<?php

$conn = mysqli_connect("localhost","root","","live");

$colortemplate = $_POST['templateColorval'];







$sql = "UPDATE finalchanges set templatecolor = '$colortemplate' where sessionid='123456789';"; 
$nu = mysqli_query($conn,$sql);


echo $colortemplate;

?>