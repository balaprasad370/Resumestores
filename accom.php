<?php

$conn = mysqli_connect("localhost","root","","live");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['sub'])){
    $summary = $_POST['summary'];
    if(isset($summary)){
        $updatetrue = "UPDATE accomplishments set accomplish='$summary' where sessionid='123456789';";
        $resulttrue = mysqli_query($conn,$updatetrue);

    }
    else{
      $updatefalse = "UPDATE accomplishments set accomplish= NULL where sessionid='123456789';";
        $resultfalse = mysqli_query($conn,$updatefalse);
    }
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

<script src="ckeditor/ckeditor.js"></script>

</head>

<body>

 <?php include"nav.php";?>
  <main id="main">


     <section class="sect-det">
        
              <h1>Accomplishments</h1>
          <p>Briefly tell us about your background</p>

          <form action="accom.php" method="post">
                  <?php
                    $fet = "SELECT * from accomplishments where sessionid='123456789';";
                    $fetchresult = mysqli_query($conn,$fet);
                    while($row = mysqli_fetch_array($fetchresult)){
                        $sum = $row['accomplish'];

                    }

                      ?>

           <textarea name="summary" id="accomid" cols="30" rows="10" ><?php echo $sum;?></textarea>
          


                    <div class="row" style="width:100%;margin:30px 0;">
                                    <div class="col-6">
                                    <a href="skills.php"><button type="button" class="btn btn-lg btn-info float-start">BACK</button></a>
                                    <a href="javascript:history.back();" id="gb"><div class="icon"></div>Go Back</a>
                                    </div>
                                    <div class="col-6">
                                    <button type="submit" class="btn btn-lg btn-success float-end" name="sub">NEXT</button>
                                    </div>
                    </div>

          </form>
           
     </section>

  </main><!-- End #main -->

  <script>
     CKEDITOR.replace('accomid');
  </script>

<?php include "footer.php"; ?>

</body>

</html>