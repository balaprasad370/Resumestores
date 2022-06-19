<?php
$conn = mysqli_connect("localhost","root","","live");

$sql = "SELECT * from language where sessionid ='123456789';";
$fet = mysqli_query($conn,$sql);
$data = array();

while($row = mysqli_fetch_assoc($fet)){
    $data[]  = $row; 
}

print_r($data);
?>