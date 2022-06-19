<?php

$conn = mysqli_connect("localhost","root","","live");

$checkwork = "select * from work where sessionid='123654789';";
$workres = mysqli_query($conn,$checkwork);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['sub'])){
        if(mysqli_num_rows($workres)>=1){
        header('location:work.php');
         //echo mysqli_num_rows($workres);
        }
        else{
          header('location:work-det.php');
          //echo mysqli_num_rows($workres);
        }

  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - FlexStart Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
$sql = "select * from education where sessionid='123654789';";
$res = mysqli_query($conn,$sql);
$i=0;
while($row = mysqli_fetch_assoc($res)){
?>

    <div class="container   mb-3 mt-3" style="font-size:1rem;overflow:hidden;" id="delete<?php echo $row['id'];?>">
<div style="border: 3px solid #e8ecf0;text-align:left;height: 100px;position:relative;">
<div style="width:90%;box-sizing: content-box;overflow:hidden;">

 <span class="countr" style="margin-right:50px"></span>
    <span class="ribbon" ></span>
    <div style="width: 80%;margin: -15px 10px 0 38px;">

    <span ><strong><?php echo $row['degree'];?></strong></span>|
    <span><?php echo $row['grst'];?></span>|
    <span><?php echo $row['gred'];?></span>|
    <span><?php echo $row['scname'];?></span>|
    <span><?php echo $row['sclo'];?></span>|
    <span><?php echo $row['fod'];?></span>|
    <div style="font-size:13px;padding: 5px 50px;"><?php echo $row['educdescription']; ?></div>
    </div>
  </div>
    <div style="position:absolute;top:3px;right:10px;">
    <a href="edit-educ.php?id=<?php echo $row['id'];?>" title="Edit" style="padding-right: 20px;"><i class="bi bi-pencil-fill"></i></a>
    <span title="Delete" class="btn-del" style="cursor:pointer;color:blue;" onclick="deleteId(<?php echo $row['id'];?>)"><i class="bi bi-trash-fill"></i></span>
</div>
</div>
    </div>

<?php
}
?>
<div class="container mb-3" style="text-align:center; font-size:0.6rem;">
<div style="margin-bottom: 1.6rem;">
<a href="educ-det.php" ><button class="btn btn-lg btn-light" style="width:100%;color:blue;border:1px dashed #000fff;font-weight:600;"><span><i class="bi bi-plus-circle-fill" style="padding-right: 5px;"></i>ADD ANOTHER DEGREE</span></button></a>
</div> 
  <form action="educ.php" method="post">
        <div class="row" style="margin-right: 10px;">
                        <div class="col-6">
                        <a href="cont.php"><button type="button" class="btn btn-lg btn-info float-start">BACK</button></a>
                        </div>
                        <div class="col-6">
                          <button type="submit" class="btn btn-lg btn-success float-end" name="sub">NEXT</button>
                        </div>
                </div>
  </form>



</div>
</section>
    
  </main>
  
  <!-- End #main -->



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
                    url:'educ-del.php',
                    data:{delete_id:id},
                    success:function(data){
                      $('#delete'+id).hide();
                     // location.reload();
                    }
                })
  }
  
})

 }
</script>
      

<?php include "footer.php"; ?>
</body>

</html>