<?php




$conn = mysqli_connect("localhost","root","","live");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['sub'])){
    $skills = $_POST['field_name'];
        $skillimp = implode(",",$skills);
        $update = "UPDATE others set skills='$skillimp' where sessionid='123456789';";
        $result = mysqli_query($conn,$update);
       
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body onload="fetch()">

 <?php include"nav.php";?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        

      </div>
    </section><!-- End Breadcrumbs -->

   <!--body-->
   <section id="othdy">
   <form action="skills.php" method = "post">
   <div class="container">

   <div class="field_wrapper">
    <div>

        
        <a href="javascript:void(0);" class="add_button" title="Add field">+Add one more</a>
    </div>
</div>

   </div>
   <input type="submit" value="sub" name="sub">
   </form>
   </section>
  



  </main><!-- End #main -->

<?php include "footer.php"; ?>
<script type="text/javascript">
  var wrapper = $('.field_wrapper');
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
     //Input field wrapper
    var fieldHTML = '<div class="rw mb-3"><div class="sk_star"><input type="text" class="form-control " style="height:200px;width:20%;" name="field_name[]"/></div><div class="sk_in"><input type="text" class="form-control inut" name="field_name[]"/></div><a href="javascript:void(0);" class="remove_button"><div class=" sk_del" style="color:#3A96F0;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"> <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg></div></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });



});
</script>
<script>
  function fetch(){
   
<?php
$fet = "SELECT * from others;";
$fetchresult = mysqli_query($conn,$fet);
while($row = mysqli_fetch_array($fetchresult)){
    $skill1 = $row['skills'];
    $skillexp = explode(",", $skill1);
    $count = count($skillexp);
  
  
for($i=0;$i<$count;$i++){
  ?>
  $(wrapper).append('<div class="rw mb-3"><div class=""sk_in"><input type="text" class="form-control inut" name="field_name[]"/></div><div class="sk_in"><input type="text" class="form-control inut" name="field_name[]" value="<?php echo $skillexp[$i];?>"/></div><a href="javascript:void(0);" class="remove_button"><div class=" sk_del" style="color:#3A96F0;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"> <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg></div></a></div>');


  <?php
}
}
?>

}

  
</script>

</body>

</html>