<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- <div  id="fname" > </div>
        <button type="button" name="sub" onclick="fun()">fetch data</button> -->

<button id="showData">Show User Data</button>
<div id="table-container"></div> 

<input type="range" name="rankge" id="h" min="8" max="30">

<!-- <button id='fetdata'>send data</button> -->
<div id="table"></div>

<input type="range" name="ranhkge" id="rangeid" onchange="fun()">

<script>
// function fun(){
// let rangevalue = document.getElementById("rangeid").value;
// alert(rangevalue);
// }
</script>




<script>

$(document).on('click','#showData',function(e){
    $.ajax({    
        type: "post",
        url: "ret.php",             
        dataType: "html",                  
        success: function(data){                    
            $("#table-container").html(data); 
        }
    });
   

});


let rangevalue = document.getElementById("rangeid").value;
console.log(rangevalue);
function fun(){

    $.ajax({    
        type: "post",
        url: "fetch.php",             
        data:{delete_id:rangevalue},                  
        success: function(data){                    
            $("#table").html(data); 
        }
    });
    console.log(rangevalue);

   
   

// $(document).on('click','#fetdata',function(e){
    
// });


// console.log(rangevalue);

}


</script>
    
</body>
</html>