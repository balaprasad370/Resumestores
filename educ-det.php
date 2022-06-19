<?php
$conn = mysqli_connect("localhost","root","","live");


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['sub'])){
    $scname = $_POST['scname'];
    $sclo = $_POST['sclo'];
    $degree = $_POST['degree'];
    $fod = $_POST['fod'];
    $grst = $_POST['grst'];
    $gred = $_POST['gred'];
    $description = $_POST['editor1'];
    

    echo $scname,$sclo,$degree,$fod,$grst,$gred;
    $sql = "INSERT INTO education values('','$scname','$sclo','$degree','$fod','$grst','$gred','$description','123654789')";
     $insert = mysqli_query($conn,$sql);
    
     header('location:educ.php');
     
  
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

  <script src="ckeditor/ckeditor.js"></script>

<?php include "csslinks.php";?>



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
      <form action="educ-det.php" method="post">
            <div class="row g-2 mb-3">
                            
                        <div class="col-6">
                        <strong>School Name</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="scname" placeholder="School Name" name="scname">  
                            </div>
                        </div>
                             
                        <div class="col-6">
                        <strong>School Location</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="sclo" placeholder="School Location" name="sclo"> 
                            </div>
                        </div>
            </div>
            
            


            <div class="row g-2 mb-3">
                        <div class="col-6">
                        <strong>Degree</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="degree" placeholder="Degree" name="degree"> 
                            </div>
                        </div>
                        
                        <div class="col-6">
                        <strong>Field of Study</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="fod" placeholder="Field of Study" name="fod"> 
                            </div>
                        </div>
                
            </div>


            <div class="row g-2 mb-3">
                        <div class="col-6">
                        <strong>Graduation Start Date</strong>
                            <div class="form-group form-group-lg">
                                <input type="month" class="form-control" id="grst"  name="grst"> 
                            </div>
                        </div>
                        
                        <div class="col-6">
                        <strong>Graduation End Date</strong>
                            <div class="form-group form-group-lg">
                                <input type="month" class="form-control" id="gred"  name="gred"> 
                            </div>
                        </div>
                
            </div>

            <div class="col-12">
                        <div style="width:100%;padding-bottom:20px;">
                                  <div id="educdesc" style="color: #4154f1;cursor:pointer;width:150px;">
                                  <strong> <i class="bi bi-plus-lg" id="addicon"></i>Add description</strong>
                                   </div>
                        </div>

                            <div style="width:100%;padding:0 0 50px 0; display:none;" id="texteditor">
                            <textarea name="editor1" id="editor1" rows="30">
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
              
                CKEDITOR.replace( 'editor1' );
             const educDescription = document.getElementById("educdesc");
             const textEditor = document.getElementById("texteditor");
            const addIcon = document.getElementById("addicon").classList;
             educDescription.addEventListener("click",function(){

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