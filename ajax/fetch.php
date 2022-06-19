<?php
$conn = mysqli_connect("localhost","root","","live");

// $rand = rand();
$id = $_POST['delete_id'];

$sql = "UPDATE language set languagename='$id' where sessionid ='123456789';";
$fet = mysqli_query($conn,$sql);


echo "$id";
?>