<?php




$conn = mysqli_connect("localhost","root","","live");

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST['sub'])){
    $skills = $_POST['skillname'];
    if(isset($skills)){
    $starskill = $_POST['star'];
        $skillimp = implode(",",$skills);
        $starimp = implode(",",$starskill);
        $updatetrue = "UPDATE language set languagename='$skillimp', languagestar= '$starimp' where sessionid='123456789';";
        $resulttrue = mysqli_query($conn,$updatetrue);
    }else{
      $updatefalse = "UPDATE language set languagename='', languagestar= '' where sessionid='123456789';";
        $resultfalse = mysqli_query($conn,$updatefalse);
    }

        header('location:finalresume.php');
        

  }
}






?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include "csslinks.php";?>

<!--stars-->
    <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">-->
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="star.js"></script>

</head>
<body onload="fetch()">
<?php include"nav.php";?>
  
<section class="sect">
  <h1>What languages do you possess?</h1>
  <form action="language.php" method="post">
      <div class="field_wrapper">
  
    <div>
        
      

        <a href="javascript:void(0);" class="add_button" title="Add field" style="color: #3A96F0;"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16"><path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/></svg>Add one more</a>

    </div>
    

  
</div>



<script type="text/javascript">
     var wrapper = $('.field_wrapper'); //Input field wrapper
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="rw sk_dy"><div class="sk_star"><label for="input-3" class="control-label"></label>  <input id="input-3" name="star[]" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="0"></div><div class="sk_name"><input type="text" name="skillname[]" class="form-control" value=""/></div><a href="javascript:void(0);" class="remove_button"><div class=" sk_del" style="color:#3A96F0;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"> <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg></div></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML);
             //Add field html
             fetchstar();

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
   $fet = "SELECT * from language where sessionid='123456789';";
   $fetchresult = mysqli_query($conn,$fet);
   while($row = mysqli_fetch_array($fetchresult)){
       $skill1 = $row['languagename'];
       $star1 = $row['languagestar'];
       $skillexp = explode(",", $skill1);
       $starskillexp = explode(",",$star1);
       $count = count($skillexp);
     
     
   for($i=0;$i<$count;$i++){
     ?>
     $(wrapper).append('<div class="rw sk_dy"><div class="sk_star"><label for="input-3" class="control-label"></label>  <input id="input-3" name="star[]" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="<?php echo $starskillexp[$i];?>"></div><div class="sk_name"><input type="text" name="skillname[]" class="form-control" value="<?php echo $skillexp[$i];?>"/></div><a href="javascript:void(0);" class="remove_button"><div class=" sk_del" style="color:#3A96F0;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"> <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg></div></a></div>');
        fetchstar();
        <?php
}
}
?>

}



     </script>
        <div class="row" style="margin-right: 10px;margin-top:30px;">
                        <div class="col-6">
                        <a href="work.php"><button type="button" class="btn btn-lg btn-info float-start">BACK</button></a>
                        </div>
                        <div class="col-6">
                          <button type="submit" class="btn btn-lg btn-success float-end" name="sub">NEXT</button>
                        </div>
                </div>

                
  </form>

</section>
<?php include "footer.php"; ?>


</body>
</html>