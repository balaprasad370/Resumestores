<?php
if(isset($_GET['id'])){
$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","live");

$fet = "SELECT * from education where id ='$id';";
$result = mysqli_query($conn,$fet);
while($row= mysqli_fetch_assoc($result)){
    $schoolname = $row['scname'];
    $schoolloc = $row['sclo'];
    $fetdegree = $row['degree'];
    $fetfod = $row['fod'];
    $fetgrst = $row['grst'];
    $fetgred = $row['gred'];
    $fetdesc = $row['educdescription'];
    
}

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
    
    $sql = "UPDATE education set scname='$scname',sclo = '$sclo',degree = '$degree', fod= '$fod',grst = '$grst',gred = '$gred',educdescription='$description' where education.id = $id";
     $insert = mysqli_query($conn,$sql);
    
     header('location:educ.php');
     
  
  }
  
}

}
else
{
    header('location:educ.php');
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
      <form action="" method="post">
            <div class="row g-2 mb-3">
                            
                        <div class="col-6">
                        <strong>School Name</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="scname" placeholder="School Name" name="scname" value="<?php echo $schoolname;?>">  
                            </div>
                        </div>
                             
                        <div class="col-6">
                        <strong>School LOcation</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="sclo" placeholder="School Location" name="sclo" value="<?php echo $schoolloc;?>"> 
                            </div>
                        </div>
            </div>
            
            


            <div class="row g-2 mb-3">
                        <div class="col-6">
                        <strong>Degree</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="degree" placeholder="Degree" name="degree" value="<?php echo $fetdegree;?>"> 
                            </div>
                        </div>
                        
                        <div class="col-6">
                        <strong>Field of Study</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="fod" placeholder="Field of Study" name="fod" value="<?php echo $fetfod;?>"> 
                            </div>
                        </div>
                
            </div>


            <div class="row g-2 mb-3">
                        <div class="col-6">
                        <strong>Graduation Start Date</strong>
                            <div class="form-group form-group-lg">
                                <input type="month" class="form-control" id="grst"  name="grst" value="<?php echo $fetgrst;?>"> 
                            </div>
                        </div>
                        
                        <div class="col-6">
                        <strong>Graduation End Date</strong>
                            <div class="form-group form-group-lg">
                                <input type="month" class="form-control" id="gred"  name="gred" value="<?php echo $fetgred;?>"> 
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
                            <textarea name="editor1" id="editor1" rows="30"><?php echo $fetdesc;?>
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
          // const desceduc = document.getElementById("editor1").value;
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