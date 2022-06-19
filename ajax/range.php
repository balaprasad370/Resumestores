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
    <input type="range" name="range" id="herb" min="10" max="30" onchange="fun()">
    <div id="table">clickthis</div>
    <script>
        function fun(){
            let val = document.getElementById("herb").value;
                        $.ajax({    
                    type: "post",
                    url: "fetch.php",             
                    data:{delete_id:val},                  
                    success: function(data){                    
                        $("#table").html(data); 
                    }
                });
            }
            
    </script>
</body>
</html>