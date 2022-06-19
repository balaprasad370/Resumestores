<?php

$conn = mysqli_connect("localhost","root","","live");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['sub'])){
    $summary = $_POST['summary'];
        $update = "UPDATE additional_info set additional='$summary' where sessionid='123456789';";
        $result = mysqli_query($conn,$update);


        header('location:finalresume.php');
        

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
<?php include "csslinks.php";?>

</head>

<body>

 <?php include"nav.php";?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        

      </div>
    </section><!-- End Breadcrumbs -->

     <section class="sect-det">
        
              <h1>Accomplishments</h1>
          <p>Briefly tell us about your background</p>
          <form action="additional.php" method="post">
          <?php
   $fet = "SELECT * from additional_info where sessionid='123456789';";
   $fetchresult = mysqli_query($conn,$fet);
   while($row = mysqli_fetch_array($fetchresult)){
       $sum = $row['additional'];

   }
    ?>

           <textarea name="summary" id="sumid" cols="30" rows="10" ><?php echo $sum;?></textarea>
          


                    <div class="row" style="width:50%;">
                                    <div class="col-6">
                                    <a href="skills.php"><button type="button" class="btn btn-lg btn-info float-start">BACK</button></a>
                                    </div>
                                    <div class="col-6">
                                    <button type="submit" class="btn btn-lg btn-success float-end" name="sub">NEXT</button>
                                    </div>
                    </div>

          </form>
           
     </section>

  </main><!-- End #main -->

<?php include "footer.php"; ?>

</body>

</html>