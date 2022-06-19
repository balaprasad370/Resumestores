<?php

$conn = mysqli_connect("localhost","root","","live");




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - FlexStart Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

<?php include "csslinks.php";?>
<style>
   body{
    counter-reset: coun;
  }
  .countr::before{
    position: absolute;
    left: 10px;
    width: 0;
    height: 0;
    counter-increment: coun;
     content:counter(coun);
     color: #ffffff;
     font-weight: 800;
  }
  .ribbon{
    position: absolute;
    left: 0;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 47px 47px 0 0;
    border-color: #007bff rgba(0,0,0,0) rgba(0,0,0,0) rgba(0,0,0,0);
    z-index: -1;
  }
  
</style>

</head>

<body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php include "nav.php" ?>

  <main id="main">

    <section class="data">


<?php 
$sql = "select * from work where sessionid='123654789';";
$res = mysqli_query($conn,$sql);
$workcount = mysqli_num_rows($res);


while($row = mysqli_fetch_assoc($res)){
?>
    <div class="container mb-3 data mt-3 divparent" style=" font-size:0.9rem;overflow:hidden;"  id="delete<?php echo $row['id'];?>">
<div style="border: 3px solid #e8ecf0;text-align:left;height: 100px;position:relative;">
<div style="width:80%;overflow:hidden;">
    
    <span class="countr" style="margin-right:50px"></span>
    <span class="ribbon" ></span>
    <div style="width: 80%;margin: -15px 10px 0 38px;">
    <span><strong><?php echo $row['job'];?></strong></span>|
    <span><?php echo $row['employer'];?></span>|
    <span><?php echo $row['city'];?></span>|
    <span><?php echo $row['state'];?></span>|
    <span><?php echo $row['jobstart'];?></span>|
    <span><?php echo $row['jobend'];?></span>|
    <div style="font-size:13px;padding: 5px 50px;"><?php echo $row['workdescription'];?></div>
</div>
</div>
    <div style="position:absolute;top:3px;right:10px;">
    <a href="work-edit.php?id=<?php echo $row['id'];?>" title="Edit" style="padding-right: 20px;"><i class="bi bi-pencil-fill"></i></a>
    <span title="Delete" class="btn-del" onclick="deleteId(<?php echo $row['id'];?>)" style="cursor:pointer;color:blue;"><i class="bi bi-trash-fill"></i></span>
</div>
</div>
    </div>

<?php
}
?>
<div class="container mb-3" style="text-align:center; font-size:0.6rem;">
<div style="margin-bottom: 1.6rem;">
<a href="work-det.php" ><button class="btn btn-lg btn-light" style="width:100%;color:blue;border:1px dashed #000fff;font-weight:600;"><span><i class="bi bi-plus-circle-fill" style="padding-right: 5px;"></i>ADD ANOTHER DEGREE</span></button></a>
</div>
<div class="row" style="margin-right: 10px;">
                <div class="col-6">
                <a href="educ.php"><button type="button" class="btn btn-lg btn-info float-start">BACK</button></a>
                </div>
                <div class="col-6">
                  <a href="skills.php"><button type="submit" class="btn btn-lg btn-success float-end" name="sub">NEXT</button></a>
                </div>
        </div>


</div>
    
    </section>
    
  </main><!-- End #main -->

 


<script>
 function deleteId(id){
  Swal.fire({
        title: 'Are you sure?',
        text: "This action can't be undone!",
        confirmButtonText: 'Yes, delete it!',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        reverseButtons: true
      }).then((result) => {
  if (result.value) {
    $.ajax({
                    type:'post',
                    url:'work-del.php',
                    data:{delete_id:id},
                    success:function(data){
                      $('#delete'+id).hide();
                    
                    }
                })
  }
  
})

 }
</script>
      

<?php include "footer.php"; ?>
</body>

</html>