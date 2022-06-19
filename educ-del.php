<?php
$conn = mysqli_connect("localhost","root","","live");
$id = $_POST['delete_id'];
echo $id;
   
     $sql = "DELETE from education where id=$id";
    mysqli_query($conn,$sql);

    header('location:educ.php');
     






?>
