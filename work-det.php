<?php
$conn = mysqli_connect("localhost","root","","live");


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['sub'])){
    $job = $_POST['job'];
    $employer = $_POST['employer'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $jobstart = $_POST['jobstart'];
    $jobend = $_POST['jobend'];
    $workeditor = $_POST['workeditor'];
    

    echo $job,$employer,$city,$state,$jobstart,$jobend;
    $sql = "INSERT INTO work values('','$job','$employer','$city','$state','$jobstart','$jobend','$workeditor','123654789')";
     $insert = mysqli_query($conn,$sql);
    
     header('location:work.php');
     
  
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

<?php include "nav.php" ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

      
       

      </div>
    </section><!-- End Breadcrumbs -->


    <section class="sect-det">
      
      <div class="conatiner mb-3" style="padding-left: 5px;padding-right:5px;">
      <form action="work-det.php" method="post">
            <div class="row g-2 mb-3">
                            
                        <div class="col-6">
                        <strong>Job</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="job" placeholder="School Name" name="job">  
                            </div>
                        </div>
                             
                        <div class="col-6">
                        <strong>Employer</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="employer" placeholder="School Location" name="employer"> 
                            </div>
                        </div>
            </div>
            
            


            <div class="row g-2 mb-3">
                        <div class="col-6">
                        <strong>City</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="city" placeholder="city" name="city"> 
                            </div>
                        </div>
                        
                        <div class="col-6">
                        <strong>State</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="state" placeholder="Field of Study" name="state"> 
                            </div>
                        </div>
                
            </div>


            <div class="row g-2 mb-3">
                        <div class="col-6">
                        <strong>Start Date</strong>
                            <div class="form-group form-group-lg">
                                <input type="month" class="form-control" id="jobstart"  name="jobstart"> 
                            </div>
                        </div>
                        
                        <div class="col-6">
                        <strong>End Date</strong>
                            <div class="form-group form-group-lg">
                                <input type="month" class="form-control" id="jobend"  name="jobend"> 
                            </div>
                        </div>
                
            </div>

                   <div class="col-12">
                        <div style="width:100%;padding-bottom:20px;">
                                  <div id="workdesc" style="color: #4154f1;cursor:pointer;width:150px;">
                                  <strong> <i class="bi bi-plus-lg" id="addicon"></i>Add description</strong>
                                   </div>
                        </div>

                            <div style="width:100%;padding:0 0 50px 0; display:none;" id="texteditor">
                            <textarea name="workeditor" id="workeditor" rows="30">
                            </textarea>
                            </div>   
                        </div>




            <div class="row" style="margin-right: 10px;">
            <div class="col-6">
             <a href="educ.php"><button type="button" class="btn btn-lg btn-info float-start">BACK</button></a>
            </div>
            <div class="col-6">
              <button type="submit" class="btn btn-lg btn-success float-end" name="sub">NEXT</button>
            </div>
            </div>

            </form>

      </div>

    </section>

  </main><!-- End #main -->

  <script>
              
              CKEDITOR.replace( 'workeditor' );

           const workDescription = document.getElementById("workdesc");
           const textEditor = document.getElementById("texteditor");
          const addIcon = document.getElementById("addicon").classList;
           workDescription.addEventListener("click",function(){

                if(textEditor.style.display == "none"){
                    textEditor.style.display = "block";
                    addIcon.remove("bi-plus-lg");
                    addIcon.add("bi-dash-lg");

                }
                else{
                  textEditor.style.display = "none";
                  addIcon.remove("bi-dash-lg");
                    addIcon.add("bi-plus-lg");
                }


           })


          </script>


 <?php include "footer.php"; ?>
</body>

</html>