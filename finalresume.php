<?php

$conn = mysqli_connect("localhost", "root", "", "live");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - FlexStart Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php include "csslinks.php"; ?>

  <!-- owlCarousel -->
  <link rel="stylesheet" href="owlcarousel/owl.carousel.css">
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




  <style>
    .body{
      scroll-behavior: smooth;
    }
    .row {
      flex: nowrap;
    }

    .left {
      text-align: left;
      height: 600px;


    }

    .right {

      height: auto;
      text-align: left;

      padding-left: 20px;
    }

    .finalsec {
      margin: 60px 10px;
    }

    .left_sub p {
      margin: 0;
    }

    .right_sub {

      height: auto;
      margin: 0 50px;
      width: 81%;
      scroll-behavior: auto;
      
    }

    .bottomfooter {
      position: fixed;
      left: 0;
      bottom: 0;
      background-color: #3a8783;
      width: 100%;
      height: 70px;
      color: #fff;
      vertical-align: center;
      z-index: 1;
    }
    .skillsdet p{
      margin: 0;
    }
    /* .template{
      position: absolute;
      top:70%;
      left:100px;
      transform: translate(-50%, -50%);
    } */

    .botdiv{
      position: absolute;
      top: 10px;
      left:15%;
      width:100%;
      bottom: 10px;
    }
    .template{
      padding: 20px 20px;
    }
    .close{
      cursor: pointer;

    }
    .botdiv p{
      margin:10px;
    }
   
    .colordiv{
      position:fixed;
      width:17%;
      height:100px;
      bottom: 70px;
      background-color: #fff000;
      right:33%;
     

    }


    .grid-container{
      color:#000;
      display: grid;
      grid-template-columns: 50% 50%;
      /* background-color: #fff000; */
      grid-gap: 10px;
      padding: 10px;
    }

    .item{
      /* background-color: #3a8783; */
      padding: 12px;
      text-align:center;
    }

    .formatcolorshow{
      color: #4844fa;
    }

    /* mobile */
    @media only screen and (max-width: 769px) {
      .left {
        display: none;
      }
      .hdmob{
        display:none;
      }
      .botdiv{
        left: 0;;
        width:100%;
        top:0;
        bottom: 0;
      }
      .grid-container{
        padding: 0;
        font-size: 10px;
      }
      
    }
    /* laptop */
    @media only screen and (min-width: 769px) {
      .hdlap{
        display: none;
      }
      .right{
        width:0;
        height: 0;
      }

     
    }
  </style>

</head>

<body>

  <?php include "nav.php"; ?>
  <main id="main">



    <section class="finalsec">

   


      <div class='row'>


                          <div class='left col-md-4'>
                            <div style="background:#f3f3f3;" class="left_sub">
                              <div style="width:60%;justify-content:end;display:grid;">
                              <div style="margin:20px 0 ;"><button  class="btn btn-block btn-info" id='myBtn'>COMPILE</button></div>
                                <p style="font-weight:700">Resume Sections</p>

                                <p><a href="cont.php">contact</a></p>
                                <p><a href="work.php">Work history</a></p>
                                <p><a href="educ.php">Education</a></p>
                                <p><a href="skills.php">skills</a></p>
                                <p><a href="summary.php">Summary</a></p>

                                <hr style="margin:5px;">
                                <p><a href="addextra.php">Add Sections</a></p>
                                <hr style="margin: 5px;">

                                <p>Download</p>
                                



                              </div>
                            </div>
                          </div>



                      <div class='right col-md-8' style="font-size: 12px;"> 
                                 
                                  <div class="hdlap">
                                    <div class="right_sub" id="rightsub" style="box-shadow: 0 0 10px rgb(88 88 95 / 12%);">
                                      <div>
                                        <h1 style="font-size: 36px;">Butra Balaprasad</h1>
                                        <p style="font-size: 16px;">Web developer</p>
                                        <p>Seeking an entry-level position to begin my career in a high-level professional environment. To secure employment with a reputable
                                          company, where I can utilize my skills and business studies background to the maximum. Seeking a challenging career with an MNC</p>
                                      </div>

                                      <div style="display:flex;flex:nowrap;">
                                        <div style="width:70%;">
                                      
                                        <!-- Work history -->
                                    

                                          <div class="heading">
                                            <svg viewBox="0 0 42 42" style="width:30px;height:30px;">
                                              <rect x="0" y="0" height="42" width="42" fill="#003d74"></rect>
                                              <path fill="#fff" transform="translate(5,5)" d="M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z"></path>
                                            </svg>
                                            <span style="font-weight:900;">Work History</span>
                                          </div>


                                          <hr style="margin: 5px 10px 5px 0;">
                                          <div style="padding:0 30px 20px 20px;">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus veniam minus, obcaecati et recusandae suscipit odit? Eos quod accusamus quos optio nemo asperiores ducimus eligendi dignissimos aperiam. Reiciendis, corporis laborum.
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque sed corporis inventore laborum officiis delectus sunt quam eius, ipsam, ullam provident sit distinctio, id est? Dignissimos rem corrupti error dolor.
                                          </div>

                                          <!-- Education -->
                                          <div class="heading">
                                            <svg viewBox="0 0 42 42" style="width:30px;height:30px;">
                                              <rect x="0" y="0" height="42" width="42" fill="#003d74"></rect>
                                              <path fill="#fff" transform="translate(5,5)" d="M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z"></path>
                                            </svg>
                                            <span style="font-weight:900;">Education</span>
                                          </div>


                                          <hr style="margin: 5px 10px 5px 0;">
                                          <div style="padding:0 30px 20px 20px;">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus veniam minus, obcaecati et recusandae suscipit odit? Eos quod accusamus quos optio nemo asperiores ducimus eligendi dignissimos aperiam. Reiciendis, corporis laborum.
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque sed corporis inventore laborum officiis delectus sunt quam eius, ipsam, ullam provident sit distinctio, id est? Dignissimos rem corrupti error dolor.
                                          </div>
                                    
                                          <!-- Certifications -->
                                          
                                          <div class="heading">
                                            <svg viewBox="0 0 42 42" style="width:30px;height:30px;">
                                              <rect x="0" y="0" height="42" width="42" fill="#003d74"></rect>
                                              <path fill="#fff" transform="translate(5,5)" d="M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z"></path>
                                            </svg>
                                            <span style="font-weight:900;">Certifications</span>
                                          </div>


                                          <hr style="margin: 5px 10px 5px 0;">
                                          <div style="padding:0 30px 20px 20px;">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus veniam minus, obcaecati et recusandae suscipit odit? Eos quod accusamus quos optio nemo asperiores ducimus eligendi dignissimos aperiam. Reiciendis, corporis laborum.
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque sed corporis inventore laborum officiis delectus sunt quam eius, ipsam, ullam provident sit distinctio, id est? Dignissimos rem corrupti error dolor.
                                          </div>

                                          <!--  Accomplishments-->
                                          <div class="heading">
                                            <svg viewBox="0 0 42 42" style="width:30px;height:30px;">
                                              <rect x="0" y="0" height="42" width="42" fill="#003d74"></rect>
                                              <path fill="#fff" transform="translate(5,5)" d="M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z"></path>
                                            </svg>
                                            <span style="font-weight:900;">Accomplishments</span>
                                          </div>


                                          <hr style="margin: 5px 10px 5px 0;">
                                          <div style="padding:0 30px 20px 20px;">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus veniam minus, obcaecati et recusandae suscipit odit? Eos quod accusamus quos optio nemo asperiores ducimus eligendi dignissimos aperiam. Reiciendis, corporis laborum.
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque sed corporis inventore laborum officiis delectus sunt quam eius, ipsam, ullam provident sit distinctio, id est? Dignissimos rem corrupti error dolor.
                                          </div>
                                          

                                          
                                          <div class="heading">
                                            <svg viewBox="0 0 42 42" style="width:30px;height:30px;">
                                              <rect x="0" y="0" height="42" width="42" fill="#003d74"></rect>
                                              <path fill="#fff" transform="translate(5,5)" d="M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z"></path>
                                            </svg>
                                            <span style="font-weight:900;">Interests</span>
                                          </div>


                                          <hr style="margin: 5px 10px 5px 0;">
                                          <div style="padding:0 30px 20px 20px;">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus veniam minus, obcaecati et recusandae suscipit odit? Eos quod accusamus quos optio nemo asperiores ducimus eligendi dignissimos aperiam. Reiciendis, corporis laborum.
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque sed corporis inventore laborum officiis delectus sunt quam eius, ipsam, ullam provident sit distinctio, id est? Dignissimos rem corrupti error dolor.
                                          </div>
                                          

                                          <!-- your own -->
                                          <div class="heading">
                                            <svg viewBox="0 0 42 42" style="width:30px;height:30px;">
                                              <rect x="0" y="0" height="42" width="42" fill="#003d74"></rect>
                                              <path fill="#fff" transform="translate(5,5)" d="M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z"></path>
                                            </svg>
                                            <span style="font-weight:900;">yourown</span>
                                          </div>


                                          <hr style="margin: 5px 10px 5px 0;">
                                          <div style="padding:0 30px 20px 20px;">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus veniam minus, obcaecati et recusandae suscipit odit? Eos quod accusamus quos optio nemo asperiores ducimus eligendi dignissimos aperiam. Reiciendis, corporis laborum.
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque sed corporis inventore laborum officiis delectus sunt quam eius, ipsam, ullam provident sit distinctio, id est? Dignissimos rem corrupti error dolor.
                                          </div>









                                        </div>
                                        






                                                      <div style="width: 30%;">

                                                        <div class="heading">
                                                          <svg viewBox="0 0 42 42" style="width:30px;height:30px;">
                                                            <rect x="0" y="0" height="42" width="42" fill="#003d74"></rect>
                                                            <path fill="#fff" transform="translate(5,5)" d="M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z"></path>
                                                          </svg>
                                                          <span style="font-weight:900;">Contact</span>
                                                        </div>

                                                        <hr style="margin: 5px 10px 5px 0;">

                                                        <div class="contactdet">
                                                          <strong>Address</strong>
                                                          <p>Alaska,California,USA,000231</p>
                                                          <strong>Phone</strong>
                                                          <p>9365798455</p>
                                                          <strong>Email</strong>
                                                          <p>forexample@gmail.com</p>
                                                        </div>


                                                        <div class="heading">
                                                          <svg viewBox="0 0 42 42" style="width:30px;height:30px;">
                                                            <rect x="0" y="0" height="42" width="42" fill="#003d74"></rect>
                                                            <path fill="#fff" transform="translate(5,5)" d="M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z"></path>
                                                          </svg>
                                                          <span style="font-weight:900;">Skills</span>
                                                        </div>
                                                        <hr style="margin: 5px 10px 5px 0;">
                                                      
                                                        <div class="skillsdet">
                                                          <p>HTML</p>
                                                          <p>CSS</p>
                                                          <p>Javascript</p>
                                                          <p>PHP</p>
                                                          <p>C++</p>
                                                          <p>Nodejs</p>
                                                        </div>


                                                        <div class="heading">
                                                          <svg viewBox="0 0 42 42" style="width:30px;height:30px;">
                                                            <rect x="0" y="0" height="42" width="42" fill="#003d74"></rect>
                                                            <path fill="#fff" transform="translate(5,5)" d="M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z"></path>
                                                          </svg>
                                                          <span style="font-weight:900;">Software</span>
                                                        </div>
                                                        <hr style="margin: 5px 10px 5px 0;">
                                                      
                                                        <div class="skillsdet">
                                                          <p>HTML</p>
                                                          <p>CSS</p>
                                                          <p>Javascript</p>
                                                          <p>PHP</p>
                                                          <p>C++</p>
                                                          <p>Nodejs</p>
                                                        </div>


                                                        <!-- Languages -->
                                                        <div class="heading">
                                                          <svg viewBox="0 0 42 42" style="width:30px;height:30px;">
                                                            <rect x="0" y="0" height="42" width="42" fill="#003d74"></rect>
                                                            <path fill="#fff" transform="translate(5,5)" d="M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z"></path>
                                                          </svg>
                                                          <span style="font-weight:900;">Languages</span>
                                                        </div>
                                                        <hr style="margin: 5px 10px 5px 0;">
                                                      
                                                        <div class="skillsdet">
                                                          <p>HTML</p>
                                                          <p>CSS</p>
                                                          <p>Javascript</p>
                                                          <p>PHP</p>
                                                          <p>C++</p>
                                                          <p>Nodejs</p>
                                                        </div>


                                                      



                                                      </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="hdmob"> 
                                    <iframe src="vibescv.php" title="W3Schools Free Online Web Tutorials" width ="800" height = "600" id="ifr"> </iframe>
                                  </div>

                      </div>


                






                     </div>



    </section>

    <div style="position: fixed; bottom:70px;width:100%;background-color:f6f8fa;height:298px;color:#fff;display:none; box-shadow:0 0 15px rgba(88,88,95,0.15);z-index:9999;" id="templateshow" >
             
                    <div style="position:absolute;top:-35px;right:15px;color:#000;font-weight:bold;font-size:16px;"><span class="close" title="close">CLOSE<strong style="font-size:24px;">&times;</strong></span></div>

                        <div class="owl-carousel" style="position: absolute;padding-top: 10px;background:#d3d3d3;">
                                  <div id="resume2" class="item hover1" ><img src="forms/cubicresume.png"style="max-width:auto;height:240px;"  loading="lazy"></div>
                                  <div id="resume2" class="item hover1"><img src="forms/cubicresume.png" style="max-width:auto;height:240px;" loading="lazy"></div>
                                  <div id="resume4" class="item hover1"><img src="forms/cubicresume.png" style="max-width:auto;height:240px;" loading="lazy" ></div>
                                  <div id="resume1" class="item hover1" ><img src="forms/cubicresume.png" style="max-width:auto;height:240px;" loading="lazy"></div>
                                  
                                  <div id="resume5" class="item hover1"><img src="forms/cubicresume.png" style="max-width:auto;height:240px;" loading="lazy"></div>
                                  <div id="resume6" class="item hover1"><img src="forms/cubicresume.png" style="max-width:auto;height:240px;" loading="lazy"></div>
                                  <div id="resume7" class="item hover1"><img src="forms/cubicresume.png" style="max-width:auto;height:240px;" loading="lazy" ></div>
                                  <div id="resume7" class="item hover1"><img src="forms/cubicresume.png" style="max-width:auto;height:240px;" loading="lazy" ></div>
                                  <div id="resume7" class="item hover1"><img src="forms/cubicresume.png" style="max-width:auto;height:240px;" loading="lazy" ></div>
                              
                        </div>
             

     </div>


            <!-- Formatting -->
            <div style="position: fixed; bottom:70px;width:100%;background-color:#f6f8fa;height:270px;color:#fff;box-shadow:0 0 15px rgba(88,88,95,0.15);z-index:9999;display:none;" id="formatting">
                    
                    <div style="position:absolute;top:-35px;right:15px;color:#000;font-weight:bold;font-size:16px;"><span class="close" title="close">CLOSE<strong style="font-size:24px;">&times;</strong></span></div>
                        
                          <div class="grid-container">

                                <div class="item" >
                                
                               
                                        <div style="width:40%;float:right;"><input type="range" class="form-range" min="7" max="20" id="fontSizeid"></div>
                                        <span id="displayfontsize" style="padding-right:5px;float:right;" class="formatcolorshow">
                                         </span>  
                                         <span style="padding-right:10%; float:right"><strong>FONT SIZE</strong></span>
                                        
                                </div>


                                          <div class="item">

                                          
                                                <span style="float:left;padding-right:10%;"><strong>LINE SPACING</strong></span>
                                                <span id="linespacingshow" style="padding-right:5px;float:left;" class="formatcolorshow">
                                                </span>  

                                                  <div style="width:40%;float:left"><input type="range" class="form-range" min="0.9" max="3" step="0.1" id="linespacingid"></div>
                                                
                                          </div>

                                            <div class="item">

                                            <div style="width:40%;float:right;"><input type="range" class="form-range" min="10" max="25" id="headspaceid"></div>
                                                    <span id="showheadspace" style="padding-right:5px;float:right;" class="formatcolorshow">
                                                    </span>  
                                                    <span style="padding-right:10%; float:right"><strong>HEADING SIZE</strong></span>

                                            </div>


                                                   <div class="item">
                                                      <span style="float:left;padding-right:10%;"><strong>TOP MARGIN</strong></span>
                                                      <span id="showtop" style="padding-right:5px;float:left;" class="formatcolorshow">
                                                      </span>  

                                                        <div style="width:40%;float:left"><input type="range" class="form-range" min="0" max="25" id="topid"></div>

                                                    </div>



                                            <!-- Font family -->
                                          <div class="item">
                                            <div style="width:40%;float:right;"><input type="range" class="form-range" min="10" max="20" id="fontfamilyid"></div>
                                                              <span id="fontfamilyshow" style="padding-right:5px;float:right;" class="formatcolorshow">
                                                              </span>  
                                                              <span style="padding-right:10%; float:right"><strong>FONT STYLE</strong></span>
                                            </div>



                                            <!-- bottom margin0 -->
                                            <div class="item">
                                                      <span style="float:left;padding-right:10%;"><strong>BOTTOM MARGIN</strong></span>
                                                        <span id="showbottomid" style="padding-right:5px;float:left;" class="formatcolorshow">
                                                        </span>  

                                                          <div style="width:40%;float:left"><input type="range" class="form-range" min="0" max="25" id="bottomid"></div>

                                </div>


                                


                                                <!-- SECTION SPACING -->
                                            <div class="item">  

                                                      <div style="width:40%;float:right;"><input type="range" class="form-range" min="5"    max="40" id="sectionspaceid"></div>

                                                                <span id="showsectionspace" style="padding-right:5px;float:right;" class="formatcolorshow">
                                                                </span> 

                                                              <span style="padding-right:10%; float:right"><strong>SECTION SPACING</strong></span>
                                          
                                                    </div>


                                                    
                                            <!-- SIDE MARGIN -->
                                            <div class="item">
                                            <span style="float:left;padding-right:10%;"><strong>SIDE MARGIN</strong></span>
                                                                  <span id="showsidemargin" style="padding-right:5px;float:left;" class="formatcolorshow">
                                                                  </span>  

                                                                    <div style="width:40%;float:left"><input type="range" class="form-range" min="0" max="10" id="sidemarginid"></div>
                                            
                                            </div>





                                


                          </div>

            </div>



            <!-- Template color -->
            <div id="colortemp" class="colordiv" style="display:none;z-index:9999;">
                  <div style="position:absolute;top:-35px;right:15px;color:#000;font-weight:bold;font-size:16px;"><span class="close" title="close">CLOSE<strong style="font-size:24px;">&times;</strong></span></div>
                    <input type="color" name="color_template" id="color_template" style="cursor:pointer;" value="#10f4f0"  >
            </div>





            
  

    <div class="bottomfooter">
            <div class="botdiv">
                    <div class="row" style="margin:0">
                            <div class=" col-2" style="background-color: #000fff;margin-left:10px;padding:2px 0; cursor:pointer;margin-right:10px;" id="changetemplate">
                              <div style="position: relative;margin:10px;">Template <span style="right:0;position:absolute;"><i id="showicon" class="bi bi-chevron-up"></i></span></div>
                          
                            </div>

                            <div class="col-2" style="background-color: #000fff;cursor:pointer" id="format">
                            <div style="position: relative;margin:10px;">Formatting <span style="right:-15px;position:absolute;"><i id="formaticon" class="bi bi-chevron-up"></i></span></div>
                            </div>

                            <div class="col-2" style="background-color: #000fff;margin-left:10px;cursor:pointer;" id="changeColor">
                            <div style="position: relative;margin:10px;">Color <span style="right:-15px;position:absolute;"><i id="colorid" class="bi bi-chevron-up"></i></span></div>
                            </div>

                            <div class="col-2" style="background-color: #000fff;margin-left:10px;">
                              <p>Download</p>
                            </div>

                    </div>
            </div>
    </div>



  </main><!-- End #main -->
  



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
             items:5
         },
         1000:{
             items:7
         }
     }
 })
 
 });
 
 
 
 </script>
 
 <script src="owlcarousel/owl.carousel.min.js"></script>


  <?php include "footer.php"; ?>
  <script src="final.js"></script>

</body>

</html>






<!-- formatting main
                          <div style="margin:0 20%;background:#f6f8fa;height:100%;color:#fff;width:60%;">
                                    <div class="row">
                                      <div style="margin-right: 10px;width:15%;background:#fff000;margin-left:20px;">Font-size</div>
                                      <div style="margin-right: 20px;width:30%;background:#fff000;"><span id="displayfontsize" style="margin:0;"></span>
                                      <input type="range" class="form-range" min="10" max="20" id="fontSizeid">

                                      </div>
                                      
                                    
                                      <div style="margin-right: 30px;width:20%;background:#fff000;">jhwuv</div>
                                      <div style="margin-right: 30px;width:20%;background:#fff000;"><span class="para"></span><input type="range" name="para" id="paraid" min="15" max="30" step="1" onchange="fun2()"></div>
                                    </div>
                          </div> -->