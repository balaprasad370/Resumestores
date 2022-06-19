<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
         <link rel="stylesheet" href="owlcarousel/owl.carousel.css">
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<style>
      
         .owl-nav{
            position: absolute;
            top: 40%;
            left:50%;
            transform: translate(-50%,-50%);
            width: 100%;
        }
        
          .owl-nav .owl-prev{
            position: absolute;
            left: 0;
           
            display: block;
            background: #000 !important;
            width:0.9em;
            height: 60px;
            font-size:48px !important;
            color: #ffffff !important;
           
            transform: translate(0,-50%);
           
            
        

         } 

          .owl-nav .owl-next{
            position: absolute;
            right: 0;
            display: block;
            background: #000 !important;
            width:0.9em;
            height: 60px;
            font-size: 48px !important;
            color: #ffffff !important;
            transform: translate(0,-50%);
         

         }  

@media screen and (max-width:600px) {
    .owl-nav .owl-prev{
        width:30px ;
        
        font-size: 14px !important;
    }
    .owl-nav .owl-next{
        width:30px ;
       
        font-size: 14px !important;
    }
    
}
    

         

  @media (max-width: 601px) {
  .carousel-inner .carousel-item > div {
      display: none;
  }
  .carousel-inner .carousel-item > div:first-child {
      display: block;
  }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
  display: flex;
}

/* medium and up screens */
@media (min-width: 600px) {
  
  .carousel-inner .carousel-item-end.active,
  .carousel-inner .carousel-item-next {
    transform: translateX(25%);
  }
  
  .carousel-inner .carousel-item-start.active, 
  .carousel-inner .carousel-item-prev {
    transform: translateX(-25%);
  }

}

.carousel-inner .carousel-item-end,
.carousel-inner .carousel-item-start { 
transform: translateX(0);
}






    </style>  
<body>
    
            
            <div class="owl-carousel" style="position:relative;">
                <div id="resume2" class="item hover1" ><img src="assets/img/blog/blog-1.jpg" loading="lazy"></div>
                <div id="resume3" class="item hover1"><img src="assets/img/blog/blog-1.jpg" loading="lazy"></div>
                <div id="resume4" class="item hover1"><img src="assets/img/blog/blog-1.jpg" loading="lazy" ></div>
                <div id="resume1" class="item hover1" ><img src="assets/img/blog/blog-1.jpg" loading="lazy"></div>
                
                <div id="resume5" class="item hover1"><img src="assets/img/blog/blog-1.jpg" loading="lazy"></div>
                <div id="resume6" class="item hover1"><img src="assets/img/blog/blog-1.jpg" loading="lazy"></div>
                <div id="resume7" class="item hover1"><img src="assets/img/blog/blog-1.jpg" loading="lazy" ></div>
                                
                <div id="resume5" class="item hover1"><img src="assets/img/blog/blog-1.jpg" loading="lazy"></div>
                <div id="resume6" class="item hover1"><img src="assets/img/blog/blog-1.jpg" loading="lazy"></div>
                <div id="resume7" class="item hover1"><img src="assets/img/blog/blog-1.jpg" loading="lazy" ></div>
            </div>
            </div>

            
<script>
 

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:8
        }
    }
})

});



</script>

<script src="owlcarousel/owl.carousel.min.js"></script>

</body>
</html>