
<?php




$conn = mysqli_connect("localhost", "root", "", "live");

require_once __DIR__ . '/vendor/autoload.php';



$finalchangefetch = "select * from finalchanges where sessionid='123456789';";
$finalchangerun = mysqli_query($conn,$finalchangefetch);
while($finalchangerow = mysqli_fetch_assoc($finalchangerun)){
  $font_size = $finalchangerow['fontsize'];
  $font_size_header = $finalchangerow['headingsize'];
  $tempcolor = $finalchangerow['templatecolor'];
  $linespacing = $finalchangerow['linespacing'];
  $sectionspacing = $finalchangerow['sectionspacing'];
  $topMargin = $finalchangerow['topmargin'];
  $sideMargins = $finalchangerow['sidemargins'];
  $bottomMargin = $finalchangerow['bottommargin'];
  
  
}




$mpdf = new \Mpdf\Mpdf([
  'format' => 'A4',
  //'orientation' => 'L',
  'margin_left' => $sideMargins,
  'margin_right' => $sideMargins,
  'margin_top' => $topMargin,
  'margin_bottom' => $bottomMargin,
  'margin_header' => 0,
  'margin_footer' => 0,
]);




// $stylesheet = file_get_contents('pdfstyles.css'); // external css
// $mpdf->WriteHTML($stylesheet, 1);

// styles 




$font_size_icon = '20';

$font_icon_color = $tempcolor;



//hr line 
$hr = "<hr style='margin-top:2px'>";

$starfill = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' class='bi bi-star-fill' viewBox='0 0 16 16'>
<path fill='{$font_icon_color}'  d='M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z'/>
</svg>";

$starnone = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'  class='bi bi-star' viewBox='0 0 16 16'>
<path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'/>
</svg>";

//contact
$contactdata = '';
$personal = '';



//splitslides
$splitsides = '';

//summary
$summary = '';

//skill
$skill = '';

//experience
$experience = '';

$jobstart = array();
$jobend = array();
$job = array();
$employer = array();
$jobcity = array();
$jobstate = array();
$workdescription = array();

//Education

$education = '';

$schoolname = array();
$schoollocation = array();
$degree = array();
$fod = array();
$schoolstart = array();
$schoolend = array();
$schooldescription = array();


//software
$software = '';

//languages
$languages = '';


//certifications

$certificatename = '';
$certificatedate = '';

//accomplishments
$accomplishment = '';




$bala = "resumestores";




//contact fetch

$contactfetch = "SELECT * from contact where  sessionid = '123654789';";
$contactimplement = mysqli_query($conn, $contactfetch);

while ($contactrow = mysqli_fetch_assoc($contactimplement)) {
  $contactdata .= "<div style='width:100%;padding-left:20px;height:100px;font-size:24px;line-height:39px;color:{$tempcolor};'>
   <h2 style='font-size:36px;margin-bottom:0; margin-top:0;'>{$contactrow['firstname']} {$contactrow['lastname']}</h2> <span style='font-size:{$font_size_header};'>{$contactrow['profession']}</span></div>";

   

   $contactheader = "<div style='padding:0;margin-top:{$sectionspacing}px;width:100%;height: 30px;color:{$tempcolor}'><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
   <rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
   <path fill='#fff' transform='translate(5,5)' d='M31.85 27.626c-1.38-3.684-3.906-4.604-5.973-4.835-1.608-.23-3.216-.92-3.905-1.38v-2.533c1.838-2.302 2.986-5.295 2.986-7.828C24.958 4.835 21.972 0 16 0c-5.972 0-8.958 5.065-8.958 11.05 0 2.763 1.148 5.756 2.986 7.828v2.762c-.69.46-2.297.921-3.905 1.382-2.067.23-4.364 1.15-5.972 4.834-.23.46-.23 1.151.23 1.612C1.759 31.54 9.798 32 16 32c6.432 0 14.241-.46 15.62-2.532.459-.46.459-1.151.23-1.842zM16 1.842c4.594 0 7.152 4.394 7.152 9.228-.28 4.546-2.666 8.112-7.232 8.456-4.449-.462-6.926-4.804-7.04-8.573 0-4.604 2.526-9.111 7.12-9.111zm0 28.086c-12.174 0-14.012-1.611-14.012-1.611 1.149-2.993 2.757-3.454 4.365-3.684 1.837-.23 3.675-.92 4.594-1.381l.918-.46v-2.073c1.149.921 2.527 1.382 4.135 1.382 1.378 0 2.756-.46 3.905-1.382v2.072l.919.46c.918.461 2.756 1.152 4.594 1.382 1.607.23 3.215.69 4.364 3.684.23 0-1.608 1.611-13.782 1.611z'></path>
 </svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Personal</strong></div></div>{$hr}";

     $platform1 = $contactrow['platform'];
     $addlinkurl1 = $contactrow['url'];
     $platformexp = explode(",",$platform1);
     $addlinkurlexp = explode(",",$addlinkurl1);
     $platformcount = count($platformexp);


     $platformarray = array();
     for ($addlinks=0; $addlinks < $platformcount; $addlinks++) { 
        $extralinks .= "<strong>{$platformexp[$addlinks]}</strong><br/>

                  <div><p style='margin:0;padding:0;text-decoration:none;color:none;'>{$addlinkurlexp[$addlinks]}</p></div><br/>
        "; 
     }

  $personal .= "<div style='padding-top:0;'>
                         <strong>Address</strong> 
                 <p style='margin:0;padding:0;'>{$contactrow['city']},{$contactrow['state']},{$contactrow['zip']}</p><br/>

                 <strong> Phone </strong>
                   <p style='margin:0;padding:0;'>{$contactrow['phone']}</p><br/>

                 <strong> Email </strong> 
                  <p style='margin:0;padding:0;'>{$contactrow['email']}</p><br/>
     
                

                  <div> {$extralinks} </div> 
                    
               

                  </div>";
}



//summary
$summaryfetch = "select * from summary where sessionid = '123456789'; ";
$summaryimplement = mysqli_query($conn, $summaryfetch);
while ($summaryrow = mysqli_fetch_assoc($summaryimplement)) {
  $summary1 = trim($summaryrow['summary']);
}

$summary = "<div style='padding:0 20px 10px 20px;text-align:justify;font-size:{$font_size};line-height:{$linespacing}' >{$summary1}</div>";



// skillsfetch
$skill23 = '';

$skillfetch = "select * from skills where sessionid = '123456789'; ";
$skillimplement = mysqli_query($conn, $skillfetch);
while ($skillrow = mysqli_fetch_assoc($skillimplement)) {
  $skill1 = $skillrow['skills'];
  $skillexp = explode(",", $skill1);
  $skillcount = count($skillexp);
}
$skillheader = "<div style='padding:0;margin-top:{$sectionspacing}px;width:100%;height: 30px;color:{$tempcolor}'><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
<rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
<path fill='#fff' transform='translate(5,5)' d='M31.36 14.293l-3.413-3.413c2.133-.64 3.84-2.773 3.84-5.333C31.787 2.56 29.227 0 26.24 0c-2.347 0-4.48 1.707-5.333 3.84l-3.2-3.2c-.854-.853-2.56-.853-3.414 0L9.6 5.333c-.213.427-.213.854-.213 1.28.213.427.64.64 1.066.427h.64c2.134 0 3.84 1.707 3.84 4.053 0 2.134-1.493 4.054-3.84 4.054-2.133 0-4.053-1.92-4.053-4.054v-.64a1.63 1.63 0 0 0-.427-1.066c-.213-.427-.64-.427-.853 0L.64 14.293c-.853.854-.853 2.347 0 3.414L14.293 31.36c.427.427 1.067.64 1.707.64.64 0 1.28-.213 1.707-.64L31.36 17.707c.853-.854.853-2.56 0-3.414zm-1.493 1.92L16.213 29.867c-.213.213-.426.213-.64 0L2.133 16.213c-.213 0-.213-.426 0-.426l3.414-3.414a5.953 5.953 0 0 0 5.76 4.48c3.2 0 5.76-2.56 5.76-5.973 0-2.773-1.707-5.12-4.267-5.76l2.987-2.987c.213-.213.426-.213.64 0l4.906 4.907c.214.213.854.427 1.067.213.427-.213.64-.64.64-1.066v-.214-.213c0-1.92 1.493-3.413 3.413-3.413 1.92 0 3.414 1.493 3.414 3.413 0 1.92-1.494 3.413-3.414 3.413h-.426c-.427 0-.854.214-1.067.64-.213.427-.213.854.213 1.067l4.694 4.907c.213 0 .213.426 0 .426z'></path>
            </svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Skills</strong></div></div>{$hr}";

for ($i = 0; $i < $skillcount; $i++) {
  $skill23 .= "<span style='margin-top:0;'>{$skillexp[$i]}</span><br>";
}

$skill = "<div style='line-height:{$linespacing};'>{$skill23}</div>";


if(!(($skill1))){
  $skillheader = '';
}



$workfetch = "select * from work where sessionid = '123654789'; ";
$workimplement = mysqli_query($conn, $workfetch);
$worknorows = mysqli_num_rows($workimplement);

if($worknorows > 0 ){
//experience fetch
$jsvar = 0;
$jevar = 0;
$jobvar = 0;
$employervar = 0;
$jobcityvar = 0;
$jobstatevar = 0;
$workdescvar = 0;

while ($workrow = mysqli_fetch_assoc($workimplement)) {
  $jobstart[$jsvar++] =  $workrow['jobstart'];
  $jobend[$jevar++] =  $workrow['jobend'];
  $job[$jobvar++] =  $workrow['job'];
  $employer[$employervar++] =  $workrow['employer'];
  $jobcity[$jobcityvar++] =  $workrow['city'];
  $jobstate[$jobstatevar++] =  $workrow['state'];
  $workdescription[$workdescvar++] = $workrow['workdescription'];

}


$workheader = "<div style='padding:0 0 0 20px;margin-top:{$sectionspacing}px; width:100%;height: 30px;color:{$tempcolor}' ><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
<rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
<path fill='#fff' transform='translate(5,5)' d='M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z'></path>
</svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Work History</strong></div></div>{$hr}";



for ($j = 0; $j <$worknorows; $j++) {
  /*"<div style='width:100%;background-color: #383977;'>
                 <span style='width:20%;background-color: #383743;float:left;'><p>{$jobstart[$j]}</p><p>{$jobend[$j]}</p> </span> 
                 <span style='width:70%;background-color: #383977;float:right;'><p>{$jobstart[$j]}</p><p>{$jobend[$j]}</p> </span>
                 </div>";*/
  $experience .= "<div style='width:100%;'>
                                  
                                        <div style ='float:left;width:15%;'> 
                                        <p style='margin:0 0 0 20px;'><strong>{$jobstart[$j]}</strong></p>
                                        <p style='margin:0 0 0 20px;'><strong>{$jobend[$j]}</strong></p>
                                        </div>

                                        <div style='float:right;width:83%;'>

                                        <p style='font-size:14px;padding-top:0;margin:0;'><strong>{$job[$j]}</strong></p>
                                        <p style='margin:0;'><em>{$employer[$j]} , {$jobcity[$j]}, {$jobstate[$j]}</em></p>
                                        <div style='margin:3px 0 0 0 ;'>{$workdescription[$j]}</div>
                                        
                                        </div>
                                  
                                 
                                  </div>";
}

}

else{
  $experience = '';
  $workheader ='';
}






//Education




$schoolfetch = "select * from education where sessionid = '123654789'; ";
$schoolimplement = mysqli_query($conn, $schoolfetch);

$schoolnorows = mysqli_num_rows($schoolimplement);

if($schoolnorows>0){
  

$schoolnamevar = 0;
$schoollocvar = 0;
$degreevar = 0;
$fodvar = 0;
$schoolstartvar = 0;
$schoolendvar = 0;
$schooldescvar = 0;


while ($schoolrow = mysqli_fetch_assoc($schoolimplement)) {
  $schoolstart[$schoolstartvar++] =  $schoolrow['grst'];
  $schoolend[$schoolendvar++] =  $schoolrow['gred'];
  $schoolname[$schoolnamevar++] =  $schoolrow['scname'];
  $schoollocation[$schoollocvar++] =  $schoolrow['sclo'];
  $degree[$degreevar++] =  $schoolrow['degree'];
  $fod[$fodvar++] =  $schoolrow['fod'];
  $schooldescription[$schooldescvar++] = $schoolrow['educdescription'];
};

// education implement
$schoolheader = "<div style='padding:0 0 0 20px;margin-top:{$sectionspacing}px;width:100%;height: 30px;color:{$tempcolor}'><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
<rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
<path fill='#fff' transform='translate(5,5)' d='M30.96 22.58v-9.217l.503-.303c.327-.194.533-.58.537-1 .004-.421-.196-.81-.518-1.014L16.44 1.848a.893.893 0 0 0-.967.004l-14.96 9.21c-.318.202-.515.587-.513 1.005.002.417.203.8.525.998l6.573 3.999a1.256 1.256 0 0 0-.133.56v9.669c0 .325.122.637.335.853.217.22 2.294 2.146 8.646 2.146 6.33 0 8.463-1.82 8.686-2.028a1.21 1.21 0 0 0 .367-.884v-9.917c0-.16-.03-.313-.082-.452l4.044-2.441v8.016c-.593.396-.995 1.124-.995 1.965 0 1.262.895 2.285 2 2.285 1.104 0 1.999-1.023 1.999-2.285 0-.845-.407-1.576-1.005-1.97zM23 26.725c-.787.432-2.866 1.282-7.054 1.282-4.214 0-6.246-.905-6.982-1.34v-8.468l6.493 3.95a.892.892 0 0 0 .937.006L23 18.17v8.556zm-7.06-6.876L3.08 12.045l12.881-7.89 12.922 7.868L15.94 19.85z'></path>
            </svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Education</strong></div></div>{$hr}";





for ($j = 0; $j < $schoolnorows; $j++) {

  $education .= "<div style='width:100%;'>
                                 
                                       <div style ='float:left;width:15%;'> 
                                       <p style='margin:0 0 0 20px;'><strong>{$schoolstart[$j]}</strong></p>
                                       <p style='margin:0 0 0 20px;'><strong>{$schoolend[$j]}</strong></p>
                                       </div>

                                       <div style='float:right;width:83%;'>

                                       <p style='font-size:14px;padding-top:0;margin:0;'><strong>{$degree[$j]}</strong></p>
                                       <p style='margin:0;'><em>{$schoolname[$j]} , {$schoollocation[$j]}, {$jobstate[$j]}</em></p>
                                       <div style='padding-left:0;'> {$schooldescription[$j]} </div>
                                       
                                       </div>
                                 
                                 <br>
                                 </div>";
}


}


else{
  $education ='';
  $schoolheader = '';
}





//software implement
$softwarefetch = "select * from software where sessionid = '123456789'; ";
$softwareimplement = mysqli_query($conn, $softwarefetch);
while ($softwarerow = mysqli_fetch_assoc($softwareimplement)) {
  $software1 = $softwarerow['softwareskill'];
  $softwareexp = explode(",", $software1);
  $softwarecount = count($softwareexp);
}
$softwareheader = "<div style='padding:0 0 0 0;margin-top:{$sectionspacing}px;width:100%;height: 30px;color:{$tempcolor}'><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
<rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
<path fill='#fff' transform='translate(5,5)' d='M30.08 2.986H1.92C.853 2.986 0 3.84 0 4.906v17.067c0 1.067.853 1.92 1.92 1.92h13.013v2.987h-4.906c-.64 0-1.067.426-1.067 1.066 0 .64.427 1.067 1.067 1.067h11.946c.64 0 1.067-.427 1.067-1.067 0-.64-.427-1.066-1.067-1.066h-4.906v-2.987H30.08c1.067 0 1.92-.853 1.92-1.92V4.906c0-1.066-.853-1.92-1.92-1.92zm0 18.987H1.92V4.906h27.947v17.067z'></path>
            </svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Software</strong></div></div>{$hr}";

for ($soft = 0; $soft < $softwarecount; $soft++) {
  $software .= "<p style='margin:0;'>{$softwareexp[$soft]}</p>";
}

if(!(($software1))){
  $softwareheader = '';
}


$languagestarexp = array();
$languageexp =array();


//language implement
$languagefetch = "select * from language where sessionid = '123456789'; ";
$languageimplement = mysqli_query($conn, $languagefetch);
while ($languagerow = mysqli_fetch_array($languageimplement)) {
  $language123 = $languagerow['languagename'];
  $languagestar1 = $languagerow['languagestar'];
  $languageexp = explode(",", $language123);
  $languagestarexp = explode(",", $languagestar1);
  $languagecount = count($languageexp);
}

$languageheader = "<div style='padding:0 0 0 0;margin-top:{$sectionspacing}px;width:100%;height: 30px;color:{$tempcolor}'><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
<rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
<path fill='#fff' transform='translate(5,5)' d='M21.101 3.014C16.231 3.014 14.841 0 8.58 0 4.638 0 2.087 3.246 2.087 3.246v27.826c0 .464.464.928.928.928.463 0 .927-.464.927-.928V18.32c1.16-.696 2.55-1.391 4.406-1.391 6.26 0 8.116 3.014 12.985 3.014 4.87 0 8.58-3.014 8.58-3.014V0s-3.71 3.014-8.812 3.014zM27.826 16c-1.16.696-3.478 2.087-6.493 2.087-1.855 0-3.246-.464-4.87-1.16-2.086-.927-4.405-1.855-8.115-1.855-1.623 0-3.015.232-4.174.928V3.942c.696-.696 2.319-1.855 4.638-1.855 3.014 0 4.637.696 6.26 1.391 1.624.696 3.479 1.623 6.261 1.623 2.551 0 4.87-.695 6.725-1.623V16z'></path>
</svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Languages</strong></div></div>{$hr}";



// $langstararray = array();

// $languagedummy = '';



for ($lang = 0; $lang < $languagecount; $lang++) {

//   // $langstararray[$lang] =  
//   for ($hf = 0; $hf < $languagestarexp[$lang]; $hf++) {
//     $langstararray[$lang] .= $starfill;
//   };

//   if ($languagestarexp[$lang] < 5) {
//     for ($jk = $languagestarexp[$lang]; $jk < 5; $jk++) {
//       $langstararray[$lang] .= $starnone;
//     };
//   }

  $languagedummy .= "<span style='margin:0;'><strong>. </strong>{$languageexp[$lang]}</span><br>";
}

$language = "<div style='margin-top:10px;'>{$languageheader}{$languagedummy}</div>";




if(($language123 == NULL)){
  $languageheader = '';
  $language = '';
}



//certification
$certificationheader = "<div style='padding:0 0 0 20px;margin-top:{$sectionspacing}px;width:100%;height: 30px;color:{$tempcolor}'><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
<rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
<path fill='#fff' transform='translate(5,5)' d='M31.872 26.24l-5.785-10.88c.643-1.28.857-2.773.857-4.48C26.944 4.907 22.016 0 16.016 0c-6 0-10.927 4.907-10.927 10.88 0 1.707.428 3.2 1.071 4.48l-6 10.667c-.214.426-.214.853 0 1.066.215.427.643.64 1.072.64l4.928-1.066 1.714 4.693c.214.213.429.64.857.64.429 0 .643-.213.857-.427l5.143-9.6h2.142l5.143 9.6c.214.427.428.427.857.427.428 0 .643-.213.857-.64l1.714-4.693 4.928 1.066c.429 0 .857 0 1.071-.426.643-.427.643-.854.429-1.067zM9.16 28.587l-1.286-3.414c-.214-.426-.643-.853-1.071-.64l-3.643.854 4.286-7.68c1.5 1.92 3.428 3.2 5.785 4.053L9.16 28.587zm6.856-8.747c-4.928 0-8.999-4.053-8.999-8.96 0-4.907 4.071-8.96 9-8.96 4.927 0 8.998 4.053 8.998 8.96 0 4.907-4.07 8.96-8.999 8.96zm9.428 4.48c-.429-.213-1.071.213-1.071.64l-1.286 3.627-3.857-7.04c2.357-.64 4.5-2.134 5.785-4.054l4.286 7.68-3.857-.853z'></path>
            </svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Certifications</strong></div></div>{$hr}";

$certfetch = "select * from certification where sessionid = '123456789'; ";
$certimplement = mysqli_query($conn, $certfetch);
while ($certrow = mysqli_fetch_assoc($certimplement)) {
  $certdate = $certrow['certdate'];
  $certname = $certrow['certname'];
  $certdateexp = explode(",", $certdate);
  $certnameexp = explode(",", $certname);
}
$certcount = count($certnameexp);
for ($cert = 0; $cert < $certcount; $cert++) {
  $certification1 .= "<div style='width:100%;'>
                                 
                  <div style ='float:left;width:15%;'> 
                  <p style='margin:0 0 0 20px;'><strong>{$certdateexp[$cert]}</strong></p>
                  
                  </div>

                  <div style='float:right;width:83%;'>
                  <p style='margin:3px 0 0 0 ;'>$certnameexp[$cert]</p>
                  
                  </div>

                </div>";
}

$certification .= "<div style='margin-bottom:15px;'>{$certification1}</div>";

if($certname == NULL){
  $certificationheader = '';
}

//accomplishments

//accomplishments header
$accomplishheader = "<div style='padding:0 0 0 20px;margin-top:{$sectionspacing}px;width:100%;height: 30px;color:{$tempcolor};'><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
<rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
<path fill='#fff' transform='translate(5,5)' d='M32 7.438c0 5.312-5.25 9.437-8.375 11.5-.063.062-.125.187-.188.25 0 0-.187.25-1.375 1.75-.875 1.25-1.812 2.812-1.812 4.687 0 1.5 1.25 3.063 2.563 4.25h2.812V32H6.375v-2.125h2.813c1.312-1.188 2.562-2.75 2.562-4.25 0-1.688-.938-3.375-1.75-4.625-.563-.625-1-1.25-1.438-1.938C5.5 17.063 0 12.875 0 7.5 0 4 2.688 3.312 4.25 3.25c-.063-2 0-3.25 0-3.25h23.5s.063 1.25 0 3.188c1.563.124 4.25.75 4.25 4.25zM2.125 7.5c.25 3.563 2.875 6.563 4.688 8.188-1.5-3.563-2.125-7.376-2.375-10.376-1 .063-2.438.5-2.313 2.188zm23.5-5.375H6.375s-.563 11.188 4.875 17.5c.75 1 2.625 4.563 2.625 6 0 2.625-2.125 4.25-2.125 4.25h8.5s-2.125-1.688-2.125-4.25c0-3.313 2.813-6.375 2.813-6.375 5.187-5.5 4.687-17.125 4.687-17.125zm2 3.188c-.25 3-.75 6.75-2.063 10 1.75-1.688 4.125-4.5 4.313-7.876.125-1.687-1.25-2.062-2.25-2.125z'></path>
</svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Accomplishments</strong></div></div>{$hr}";

$accomfetch = "select * from accomplishments where sessionid = '123456789'; ";
$accomimplement = mysqli_query($conn, $accomfetch);
while ($accomrow = mysqli_fetch_assoc($accomimplement)) {
            $accomplishment123 = $accomrow['accomplish'] ;
  $accomplishment1  .=   "<div style='margin-left:17%;'>" .$accomplishment123 . "</div>";
  // $accomplishment = "<span style='margin:3px 0 0 15px;'>{$accomplish1}</span>";
}
$accomplishment .= "<div style='margin-bottom:15px;'>{$accomplishment1}</div>";

if($accomplishment123  == NULL){
 $accomplishheader = '';
}
//interest
$interests = '';

//interest header
$interestheader = "<div style='padding:0 0 0 20px;margin-top:{$sectionspacing}px;width:100%;height: 30px;color:{$tempcolor}'><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
<rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
<path fill='#fff' transform='translate(5,5)' d='M16 0c-2.185 0-4.267.441-6.165 1.237a1.01 1.01 0 0 0-.194.085C3.974 3.785 0 9.437 0 16c0 8.823 7.178 16 16 16 8.823 0 16-7.177 16-16 0-8.822-7.177-16-16-16zm13.999 16c0 .112-.006.223-.009.334-1.532-.406-5.42-1.17-10.217-.116a48.942 48.942 0 0 0-1.415-2.965l-.131-.248c5.131-1.981 7.313-4.649 8.215-6.315A13.944 13.944 0 0 1 30 16zM24.927 5.227c-.466 1.1-2.159 3.94-7.651 6-2.467-4.51-4.385-7.212-5.459-8.587A13.948 13.948 0 0 1 16 2c3.391 0 6.503 1.213 8.928 3.226zM9.874 3.416c.85 1.04 2.825 3.66 5.474 8.456-6.253 1.885-11.332 1.659-13.095 1.495.838-4.383 3.723-8.046 7.62-9.951zM2 16c0-.216.006-.43.016-.643.602.06 1.537.128 2.761.128 2.717 0 6.808-.337 11.538-1.819l.267.51c.452.868.86 1.725 1.232 2.565a23.32 23.32 0 0 0-2.623 1c-5.71 2.586-8.385 6.275-9.337 7.89A13.945 13.945 0 0 1 2 16zm5.373 11.013c.508-.962 2.833-4.818 8.643-7.449a20.841 20.841 0 0 1 2.576-.967c1.9 4.825 2.558 8.804 2.757 10.337A13.92 13.92 0 0 1 16 29.999a13.923 13.923 0 0 1-8.626-2.986zm15.867.963c-.288-1.925-1.005-5.545-2.688-9.869 4.642-.924 8.316-.018 9.243.253a14.031 14.031 0 0 1-6.554 9.617z'></path>
            </svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Interests</strong></div></div>{$hr}";

            


$interestfetch = "select * from interest where sessionid = '123456789'; ";
$interestimplement = mysqli_query($conn, $interestfetch);
while ($interestrow = mysqli_fetch_assoc($interestimplement)) {
  $interest1 = $interestrow['interestname'];
  $interestexp = explode(",", $interest1);
  $interestcount = count($interestexp);
  // $accomplishment = "<span style='margin:3px 0 0 15px;'>{$accomplish1}</span>";
}

for ($inte = 0; $inte < $interestcount; $inte++) {
  $interest2  .=   "<div style='margin-left:17%;'>". $interestexp[$inte] . "</div>";
}
$interests .= "<div style='margin-bottom:15px;'>{$interest2}</div>";


if (empty($interest1)) {
  $interestheader = '';
}

//Add your own
$yourheader = "<div style='padding:0 0 0 20px;margin-top:{$sectionspacing}px;width:100%;height: 30px;color:{$tempcolor};'><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
<rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
<path fill='#fff' transform='translate(5,5)' d='M11.907 19.287v9.55l5.891-5.023L32 32l-8.186-14.202 6.077-5.891H19.287l-5.085-5.21 2.232-2.232L11.97 0 0 11.969l4.465 4.465 2.233-2.232zm14.822 7.442l-7.442-4.403 3.039-3.04zM24.62 14.016l-10.604 9.55v-5.333l-5.768-5.52 4.465-4.527 5.52 5.83h6.387zm-20.155-.559L2.977 11.97l8.992-8.992 1.488 1.488z'></path>
</svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Your Own</strong></div></div>{$hr}";

$yourfetch = "select * from yourown where sessionid = '123456789'; ";
$yourimplement = mysqli_query($conn, $yourfetch);
while ($yourrow = mysqli_fetch_assoc($yourimplement)) {
  $yourown1 .= $yourrow['yourown'];
}
$yourown = "<div style='margin-left:17%;line-height:{$linespacing}'>{$yourown1}</div>";

if(empty($yourown1)){
  $yourheader = '';
}






$splitsides = "<div style='width:100%;'>
      <div style='float:left;width:68.8%;height:100%;font-size:{$font_size};'>{$workheader} {$experience} {$schoolheader} {$education}  {$certificationheader} {$certification}  {$accomplishheader} {$accomplishment}{$interestheader}{$interests}{$yourheader} {$yourown}  </div>

      <div style='float:right;width:29%;height:100%;padding-left:10px;font-size:{$font_size};'> {$contactheader}{$personal} {$skillheader} {$skill} {$softwareheader} {$software} {$language}  <br> <br>  </div>
      </div>";










$mpdf->WriteHTML($contactdata);
$mpdf->WriteHTML($summary);
$mpdf->writeHTML($splitsides);

//$mpdf->writeHTML($experience);











$mpdf->Output("{$bala}.pdf", 'I');
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);

?>