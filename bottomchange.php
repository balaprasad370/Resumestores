
<?php

$conn = mysqli_connect("localhost","root","","live");

$paraindent = $_POST['bottom_val'];







$sql = "UPDATE finalchanges set bottommargin = '$paraindent' where sessionid='123456789';"; 
$nu = mysqli_query($conn,$sql);


echo $paraindent;

?>