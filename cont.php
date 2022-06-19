<?php
$conn = mysqli_connect("localhost","root","","live");





if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['sub'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $job = $_POST['job'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $skillname1 = $_POST['skillname'];
    $starname1 = $_POST['star'];

    if(isset($starname1)){
    $skillname = implode(",",$skillname1);
    $starname = implode(",",$starname1);
    }
    else{
      $skillname = "";
      $starname = "";
    }


    // echo $fname.$lname.$job.$city.$state.$zip.$email.$phone;
    $sql = "UPDATE contact set firstname = '$fname',lastname = '$lname',profession='$job',city='$city',state='$state',zip='$zip',email='$email',phone='$phone',platform = '$skillname',url = '$starname'  where sessionid='123654789'";
     $update = mysqli_query($conn,$sql);
    
     $checkeduc = "select * from education where sessionid='123654789';";
     $workres = mysqli_query($conn,$checkeduc);

        if(mysqli_num_rows($workres)>=1){
         header('location:educ.php');
         //echo mysqli_num_rows($workres);
        }
        else{
          header('location:educ-det.php');
          // echo mysqli_num_rows($workres);
        }


     
  
  }
  
}



   $fetchcntc = "SELECT * from contact where sessionid = '123654789';";
   $fetchres = mysqli_query($conn,$fetchcntc);
   while($row = mysqli_fetch_assoc($fetchres)){
     $fnameres = $row['firstname'];
     $lnameres = $row['lastname'];
     $jobres = $row['profession'];
     $cityres = $row['city'];
     $stateres = $row['state'];
     $zipres = $row['zip'];
     $emailres = $row['email'];
     $phoneres = $row['phone'];
     


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
<link rel="stylesheet" href="bootstrap.min.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="star.js"></script>

</head>

<body >

<?php include "nav.php" ?>

  <main id="main">

  <script>

  </script>

  

    <section class="sect-det">
                    <div class="row">
                        <div class="col-8">
                                <h1>Resume heading</h1>
                                <p>We suggest include email and phone number</p>
                        </div>
                        <div class="col-4" style="position:relative;">
                                <button class="btn btn-sm btn-info" style="position: absolute;top:50%;left:50%;transform: translate(-50%, -50%);" data-bs-toggle="modal" data-bs-target="#exampleModal">preview</button>
                        </div>
                    </div>    

      <div class="conatiner mb-3" style="padding-left: 10px;padding-right:1px;">
      <form action="cont.php" method="post">
            <div class="row g-2 mb-3">
                            
                        <div class="col-6">
                        <strong>First Name</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="fullname" placeholder="First Name" name="fname" value="<?php echo $fnameres;?>">  
                            </div>
                        </div>
                             
                        <div class="col-6">
                        <strong>Last Name</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="fullname" placeholder="Last Name" name="lname" value="<?php echo $lnameres;?>"> 
                            </div>
                        </div>
            </div>
            
            <div class="col-12 mb-3">
                        <strong>Profession</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="fullname" placeholder="Profession" name="job" value="<?php echo $jobres;?>"> 
                            </div>
            </div>


            <div class="row mb-3">
                        <div class="col-12">
                        <strong>City</strong>
                            <div class="form-group ">
                                <input type="text" class="form-control" id="fullname" placeholder="City" name="city" value="<?php echo $cityres;?>"> 
                            </div>
                        </div>
            </div>
            <div class="row mb-3">
                        
                        <div class="col-6">
                        <strong>State</strong>
                            <div class="form-group ">
                                <input type="text" class="form-control" id="fullname" placeholder="State" name="state" value="<?php echo $stateres;?>"> 
                            </div>
                        </div>

                        <div class="col-6">
                        <strong>Zip</strong>
                            <div class="form-group ">
                                <input type="text" class="form-control" id="fullname" placeholder="Zip" name="zip" value="<?php echo $zipres;?>"> 
                            </div>
                        </div>
            </div>


            <div class="row g-2 mb-3">
                        <div class="col-6">
                        <strong>Email</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="fullname" placeholder="Email" name="email" value="<?php echo $emailres;?>"> 
                            </div>
                        </div>
                        
                        <div class="col-6">
                        <strong>Phone</strong>
                            <div class="form-group form-group-lg">
                                <input type="text" class="form-control" id="fullname" placeholder="Phone" name="phone" value="<?php echo $phoneres;?>"> 
                            </div>
                        </div>

                        <div class="addlinks" id="addlinkid">
                         <span><i class="bi bi-plus-lg"></i>
                         Add Social Links
                         </span>
                        </div>

<!-- addlinks -->
<div id="fieldwrap" style="display:none;">
    
<div class="field_wrapper">



  

</div>

<a href="javascript:void(0);" class="add_button" title="Add field" style="color: #3A96F0;" id="linkright">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
      <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
    </svg>Add one more
  </a>


</div>




      <script type="text/javascript">
        var wrapper = $('.field_wrapper'); //Input field wrapper
        $(document).ready(function() {
          var maxField = 5; //Input fields increment limitation
          var addButton = $('.add_button'); //Add button selector
          var wrapper = $('.field_wrapper'); //Input field wrapper
          var fieldHTML = '<div class="rw addlinksparent"><div class="linkdrop"><select name="skillname[]" id="dropdown" class="form-select"><option value="LinkedIn">LinkedIn</option><option value="Github">Github</option><option value="Twitter">Twitter</option><option value="Website">Website</option></select></div><div class="linkurl"><input name="star[]" type="text" class="form-control"></div><a href="javascript:void(0);" class="remove_button"><div class="linkdelete" style="color:#3A96F0;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"> <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg></div></a></div>'; //New input field html 
          var x = 1; //Initial field counter is 1

          //Once add button is clicked
          $(addButton).click(function() {
            //Check maximum number of input fields
            if (x < maxField) {
              x++; //Increment field counter
              $(wrapper).append(fieldHTML);
              //Add field html
              fetchstar();

            }
          });

          //Once remove button is clicked
          $(wrapper).on('click', '.remove_button', function(e) {
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
          });
        });
        
      </script>
      <script>
       fetch(); 
        function fetch() {
          <?php
          $linkfet  = "SELECT url,platform from contact where sessionid='123654789';";
          $execlink = mysqli_query($conn,$linkfet);
          while($linkrow = mysqli_fetch_assoc($execlink)){
                $platform1 = $linkrow['platform'];
                $platform  =  explode(",",$platform1);

                $url1 = $linkrow['url'];
                $url  =  explode(",",$url1);

                $count15 = count($platform);
          
                for($k =0;$k< $count15; $k++){
                   $checkar = array("LinkedIn","GIthub","Twitter","Website");
                   $checkdy = array();
                  for($j = 0;$j<4;$j++){

                   if($platform[$k] != $checkar[$j]){
                     array_push($checkdy,$checkar[$j]);
                   }
                   if(empty($platform[$k])){
                    $platform[$k] = "Website";
                   }
                   
                  }

                

          ?>
            
          inhtml = "<div class='rw addlinksparent'><div class='linkdrop'><select name='skillname[]' id='dropdown' class='form-select'><option value='<?php echo $platform[$k];?>'><?php echo $platform[$k];?></option><?php for($i =0;$i<3;$i++){?><option value='<?php echo $checkdy[$i];?>'><?php echo $checkdy[$i];?></option><?php } ?></select></div><div class='linkurl'><input type='text' class='form-control' name='star[]' value='<?php echo $url[$k];?>' /></div> <a href='javascript:void(0);' class='remove_button'><div class='linkdelete' style='color:#3A96F0;'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'> <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/></svg></div></a></div>";
          $(wrapper).append(inhtml);
          <?php
                }
      
      }
          ?>
        

        }
       </script>

       <script>

const wr_up = document.getElementById("fieldwrap");

const addLinks = document.getElementsByClassName("addlinks");

addLinks[0].addEventListener("click", () => {
    if (wr_up.style.display == "none") {
        wr_up.style.display = "block";
    } else {
        wr_up.style.display = "none";
    }
})

       
       
        </script>

     

        <!--  end skills -->

   
 


                
            </div>



            <div class="row float-end" style="margin-right: 10px;">
              <button type="submit" class="btn btn-lg btn-success"  name="sub">NEXT</button>
            </div>

            </form>

      </div>




   


    </section>

    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl"> 
    <div class="modal-content">
      <div class="modal-header" style="border-bottom:none ;">
        
        <button type="button" class="btn-close resfont" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body resfont" style="display: flex;flex-wrap:wrap;box-sizing:border-box;">
        <div style="background-color:#373d48;color:#ffffff;width:100%;height:10vw;">
            <h1 style="display: inline; font-size:4vw;">John</h1> <h1 style="display: inline;font-size:4vw;">Doe</h1>
        </div>
        <div>  
      <p>Motivated Sales Associate with 5 years of experience boosting sales and customer loyalty through individualized service. Resourceful expert at learning customer needs, directing to desirable merchandise and upselling to meet sales quotas. Committed to strengthening customer experiences with positivity and professionalism when answering requests and processing sales.</p>
       </div> 
       <div>  
      <p>Motivated Sales Associate with 5 years of experience boosting sales and customer loyalty through individualized service. Resourceful expert at learning customer needs, directing to desirable merchandise and upselling to meet sales quotas. Committed to strengthening customer experiences with positivity and professionalism when answering requests and processing sales.</p>
       </div> 
       <div>  
      <p>Motivated Sales Associate with 5 years of experience boosting sales and customer loyalty through individualized service. Resourceful expert at learning customer needs, directing to desirable merchandise and upselling to meet sales quotas. Committed to strengthening customer experiences with positivity and professionalism when answering requests and processing sales.</p>
       </div> 
    </div>
      <div class="modal-footer" style="border-top:none;">
        <button type="button" class="btn btn-secondary resfont" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



  </main><!-- End #main -->
 

 <?php include "footer.php"; ?>
</body>

</html>