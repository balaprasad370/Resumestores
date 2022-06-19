<?php

$conn = mysqli_connect("localhost","root","","live");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['sub'])){
    $summary = $_POST['editor1'];
        $update = "UPDATE summary set summary='$summary' where sessionid='123456789';";
        $result = mysqli_query($conn,$update);


        header('location:addextra.php');
        

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
<script src="ckeditor/ckeditor.js"></script>

</head>

<body>

 <?php include"nav.php";?>
  <main id="main">


     <section class="sect-det">
          
              <h1>Summary</h1>
          <p>Brieffly tell us about your background</p>
          <form action="summary.php" method="post">
          <?php
   $fet = "SELECT * from summary where sessionid = '123456789';";
   $fetchresult = mysqli_query($conn,$fet);
   while($row = mysqli_fetch_array($fetchresult)){
       $sum = $row['summary'];

   }
    ?>   
          <div class="row">
            <div style="width:100%; margin-bottom:50px;">
           <textarea name="editor1" id="summary" ><?php echo $sum;?></textarea>
            </div>
          </div>
               

          
          


                    <div class="row" style="width:100%;">
                                    <div class="col-6">
                                    <a href="skills.php"><button type="button" class="btn btn-lg btn-info float-start">BACK</button></a>
                                    </div>
                                    <div class="col-6">
                                    <button type="submit" class="btn btn-lg btn-success float-end" name="sub">NEXT</button>
                                    </div>
                    </div>

          </form>
         
     </section>
     <script>
     CKEDITOR.replace('summary');
  </script>

  </main><!-- End #main -->

<?php include "footer.php"; ?>

</body>

</html>