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
  li{
    margin-bottom: 10px;
  }
</style>
</head>

<body>

 <?php include"nav.php";?>
  <main id="main">

   

   <section class="sect-det">
       <h1>ADD extra</h1>
       <div style="text-align:left;">
        <ul style="list-style: none;">
          <li><a href="software.php"><i class="bi bi-plus-lg" style="padding-right: 5px;color:blue;"></i>Software</a></li>
       <li><a href="language.php"><i class="bi bi-plus-lg" style="padding-right: 5px;color:blue;"></i>Language</a></li>
       <li><a href="cert.php"><i class="bi bi-plus-lg" style="padding-right: 5px;color:blue;"></i>Certifications</a></li>
       <li><a href="interest.php"><i class="bi bi-plus-lg" style="padding-right: 5px;color:blue;"></i>Interests</a></li>
       <li><a href="accom.php"><i class="bi bi-plus-lg" style="padding-right: 5px;color:blue;"></i>Accomplishments</a></li>
       <li><a href="yourown.php"><i class="bi bi-plus-lg" style="padding-right: 5px;color:blue;"></i>Add your own</a></li>
      </ul>
       </div>

      
      
       <div class="row" style="margin-right: 10px;margin-top:30px;">
                        <div class="col-6">
                        <a href="summary.php"><button type="button" class="btn btn-lg btn-info float-start">BACK</button></a>
                        </div>
                        <div class="col-6">
                          <a href="finalresume.php"><button type="button" class="btn btn-lg btn-success float-end" >NEXT</button></a>
                        </div>
                </div>
      


   </section>

  </main><!-- End #main -->

<?php include "footer.php"; ?>

</body>

</html>