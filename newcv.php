<?php



$conn = mysqli_connect("localhost","root","","live");

require_once __DIR__ . '/vendor/autoload.php';



$mpdf = new \Mpdf\Mpdf([
    'format' => 'A4',
    //'orientation' => 'L',
    'margin_left' => 0,
    'margin_right' => 0,
    'margin_top' => 0,
    'margin_bottom' => 0,
    'margin_header' => 0,
    'margin_footer' => 0,
]);

// styles 
$font_size = '13px';


//hr line 
$hr = "<hr style='margin-top:2px'>";

$starfill = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-star-fill' viewBox='0 0 16 16'>
<path d='M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z'/>
</svg>";

$starnone = "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-star' viewBox='0 0 16 16'>
<path d='M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z'/>
</svg>";

//contact
$contactdata = '';
$personal ='';



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
$job =array();
$employer = array();
$jobcity = array();
$jobstate =array();

//Education

$education = '';

$schoolname = array();
$schoollocation = array();
$degree =array();
$fod = array();
$schoolstart = array();
$schoolend = array();


//software
$software = '';

//languages
$languages = '';


//certifications

$certificatename = '';
$certificatedate = '';

//accomplishments
$accomplishment = '';


$ecx ='';
$ecx1 ='';

$bala = "balaprasad";


//contact fetch

$contactfetch = "SELECT * from contact where  sessionid = '123654789';";
$contactimplement = mysqli_query($conn,$contactfetch);

while($contactrow = mysqli_fetch_assoc($contactimplement)){
   $contactdata .= "<div style='width:100%;color:#ffffff;padding-left:20px;background:#373D48;height:100px;font-size:24px;'>
   <h2 style='font-size:36px;margin-bottom:0;'>{$contactrow['firstname']} {$contactrow['lastname']}</h2> {$contactrow['profession']}</div>";

   $personal .= "<div style='padding-top:10px;'>
                  <strong>Personal</strong> 
                  {$hr}  
                  
                 <strong>Address</strong> 
                 <p style='margin:0;padding:0;'>{$contactrow['city']},{$contactrow['state']},{$contactrow['zip']}</p><br/>

                 <strong> Phone </strong>
                   <p style='margin:0;padding:0;'>{$contactrow['phone']}</p><br/>

                 <strong> Email </strong> 
                  <p style='margin:0;padding:0;'>{$contactrow['email']}</p><br/>

                  </div>";
}



//summary
$summary1 = '';
$summaryfetch = "select * from summary where sessionid = '123456789'; ";
$summaryimplement = mysqli_query($conn,$summaryfetch);
while($summaryrow = mysqli_fetch_assoc($summaryimplement)){
      $summary1 .= trim($summaryrow['summary']);
 
}
$summary .= "<div style='padding-left:20px;text-align:justify;'>{$summary1}</div>";


// skillsfetch
$skillfetch = "select * from skills where sessionid = '123456789'; ";
$skillimplement = mysqli_query($conn,$skillfetch);
while($skillrow = mysqli_fetch_assoc($skillimplement)){
  $skill1 = $skillrow['skills'];
  $skillexp = explode(",",$skill1);
  $skillcount = count($skillexp);

}
$skillheader = "<p style='margin-bottom:0;'><strong>Skills</strong></p>{$hr}";

for($i =0;$i<$skillcount;$i++){
  $skill .= "<p style='line-height:0.5;margin-top:0;'>{$skillexp[$i]}</p>";
}


//experience fetch
$jsvar =0; $jevar =0; $jobvar =0;$employervar=0;$jobcityvar =0;$jobstatevar =0;
$workdescription = "this is goning to be fun i do know about it which you have know abuouyt ths very uch is not likely oto be oknerbrhe shdbhads ds vbsh";
$workfetch = "select * from work where sessionid = '123654789'; ";
$workimplement = mysqli_query($conn,$workfetch);
$worknorows = mysqli_num_rows($workimplement);
while($workrow = mysqli_fetch_assoc($workimplement)){
   $jobstart[$jsvar++]=  $workrow['jobstart'];
   $jobend[$jevar++]=  $workrow['jobend'];
   $job[$jobvar++]=  $workrow['job'];
   $employer[$employervar++]=  $workrow['employer'];
   $jobcity[$jobcityvar++]=  $workrow['city'];
   $jobstate[$jobstatevar++]=  $workrow['state'];



}

$workheader = "<p style='margin:0 0 0 20px;'><strong>Experience</strong></p>{$hr}";

  for($j=0;$j<$worknorows;$j++){
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
                                        <p style='margin:3px 0 0 0 ;'>{$workdescription}</p>
                                        
                                        </div>
                                  
                                  <br>
                                  </div>";

  }


//Education
$schoolnamevar =0; $schoollocvar =0; $degreevar =0;$fodvar=0;$schoolstartvar =0;$schoolendvar =0;
$schooldescription = " this is goning to be fun i do know about it which you have know abuouyt ths very uch is not likely oto be oknerbrhe shdbhads ds vbshthis is goning to be fun i do know about it which you have know abuouyt ths very uch is not likely oto be oknerbrhe shdbhads ds vbshthis is goning to be fun i do know about it which you have know abuouyt ths very uch is not likely oto be oknerbrhe shdbhads ds vbshthis is goning to be fun i do know about it which you have know abuouyt ths very uch is not likely oto be oknerbrhe shdbhads ds vbsh";
$schoolfetch = "select * from education where sessionid = '123654789'; ";
$schoolimplement = mysqli_query($conn,$schoolfetch);

$schoolnorows = mysqli_num_rows($schoolimplement);

while($schoolrow = mysqli_fetch_assoc($schoolimplement)){
   $schoolstart[$schoolstartvar++]=  $schoolrow['grst'];
   $schoolend[$schoolendvar++]=  $schoolrow['gred'];
   $schoolname[$schoolnamevar++]=  $schoolrow['scname'];
   $schoollocation[$schoollocvar++]=  $schoolrow['sclo'];
   $degree[$degreevar++]=  $schoolrow['degree'];
   $fod[$fodvar++]=  $schoolrow['fod'];



}

// education implement
$schoolheader = "<p style='margin:0 0 0 20px;'><strong>Education</strong></p>{$hr}";

//   for($j=0;$j<$schoolnorows;$j++){
 
//                  $education .= "<table >
//                                   <tr>
//                                         <td style ='text-align:left;vertical-align:top;'> 
                                            //<p><strong>{$schoolstart[$j]}</strong></p><p><strong>{$schoolend[$j]}</strong></p>
//                                         </td>
//                                         <td style='text-align:left;width:500px;padding-left:15px;vertical-align:top;'>
//                                         <p style='font-size:14px;padding-top:0;'><strong>{$degree[$j]}</strong></p>
                                        //<p><em>{$schoolname[$j]} , {$schoollocation[$j]}<em></p>
//                                         <p style = 'line-height:3;'>{$workdescription}</p>
                                        
//                                         </td>
//                                   </tr>
//                                   <br>
//                                   </table>";

//   }


for($j=0;$j<$schoolnorows;$j++){
  
                $education .= "<div style='width:100%;'>
                                 
                                       <div style ='float:left;width:15%;'> 
                                       <p style='margin:0 0 0 20px;'><strong>{$schoolstart[$j]}</strong></p>
                                       <p style='margin:0 0 0 20px;'><strong>{$schoolend[$j]}</strong></p>
                                       </div>

                                       <div style='float:right;width:83%;'>

                                       <p style='font-size:14px;padding-top:0;margin:0;'><strong>{$degree[$j]}</strong></p>
                                       <p style='margin:0;'><em>{$schoolname[$j]} , {$schoollocation[$j]}, {$jobstate[$j]}</em></p>
                                       <p style='margin:3px 0 0 0 ;'>{$workdescription}</p>
                                       
                                       </div>
                                 
                                 <br>
                                 </div>";

 }




  //software implement
  $softwarefetch = "select * from software where sessionid = '123456789'; ";
$softwareimplement = mysqli_query($conn,$softwarefetch);
while($softwarerow = mysqli_fetch_assoc($softwareimplement)){
  $software1 = $softwarerow['softwareskill'];
  $softwareexp = explode(",",$software1);
  $softwarecount = count($softwareexp);

}
$softwareheader = "<p style='margin:0;'><strong>Software</strong></p>{$hr}";

for($soft =0;$soft<$softwarecount;$soft++){
  $software .= "<p style='margin:0;'>{$softwareexp[$soft]}</p>";
}

//language implement
$languagefetch = "select * from language where sessionid = '123456789'; ";
$languageimplement = mysqli_query($conn,$languagefetch);
while($languagerow = mysqli_fetch_assoc($languageimplement)){
  $language1 = $languagerow['languagename'];
  $languagestar1 = $languagerow['languagestar'];
  $languageexp = explode(",",$language1);
  $languagestarexp = explode(",",$languagestar1);
  $languagecount = count($languageexp);

}
$languageheader = "<p style='margin:0;'><strong>Languages</strong></p>{$hr}";
 
$langstararray = array();


for($lang =0;$lang<$languagecount;$lang++){
  
    // $langstararray[$lang] =  
    for ($hf=0; $hf < $languagestarexp[$lang]; $hf++) { 
      $langstararray[$lang] .=$starfill; 
    };
    if($languagestarexp[$lang]<5){
      for ($hf=$languagestarexp[$lang]; $hf < 5; $hf++) { 
        $langstararray[$lang] .=$starnone; 
      };
     }

  $language .= "<p style='margin:0;'>{$languageexp[$lang]}</p><span style='float:right;'>{$langstararray[$lang]}</span>";
}



//certification
$certificationheader = "<p style='margin:0;padding-left:20px;'><strong>Certifications</strong></p>{$hr}";

$certfetch = "select * from certification where sessionid = '123456789'; ";
$certimplement = mysqli_query($conn,$certfetch);
while($certrow = mysqli_fetch_assoc($certimplement)){
     $certdate = $certrow['certdate'];
     $certname = $certrow['certname'];
     $certdateexp = explode(",",$certdate);
     $certnameexp = explode(",",$certname);
}
$certcount = count($certnameexp);
for ($cert=0; $cert < $certcount; $cert++) { 
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


//accomplishments

//accomplishments header
$accomplishheader = "<p style='margin:0;padding-left:20px;'><strong>Accomplishments</strong></p>{$hr}";

$accomfetch = "select * from accomplishments where sessionid = '123456789'; ";
$accomimplement = mysqli_query($conn,$accomfetch);
while($accomrow = mysqli_fetch_assoc($accomimplement)){
                    $accomplishment1  .=   "<div style='margin-left:17%;'>".$accomrow['accomplish']."</div>";
      // $accomplishment = "<span style='margin:3px 0 0 7px;'>{$accomplish1}</span>";
}
$accomplishment .= "<div style='margin-bottom:15px;'>{$accomplishment1}</div>";

//interest
$interests ='';

//interest header
$interestheader = "<p style='margin:0;padding-left:20px;'><strong>Interests</strong></p>{$hr}";

$interestfetch = "select * from interest where sessionid = '123456789'; ";
$interestimplement = mysqli_query($conn,$interestfetch);
while($interestrow = mysqli_fetch_assoc($interestimplement)){
                     $interest1 = $interestrow['interestname'];
                    $interestexp = explode(",",$interest1);
                    $interestcount = count($interestexp);
      // $accomplishment = "<span style='margin:3px 0 0 15px;'>{$accomplish1}</span>";
}

for ($inte=0; $inte < $interestcount; $inte++) { 
  $interests  .=   "<div style='margin-left:17%;'>".$interestexp[$inte]."</div>";
}

if($interest1 == ''){
  $interestheader = '';

}

//Add your own
$yourheader = "<p style='margin:0;padding-left:20px;'><strong>Interests</strong></p>{$hr}";

$yourfetch = "select * from yourown where sessionid = '123456789'; ";
$yourimplement = mysqli_query($conn,$yourfetch);
while($yourrow = mysqli_fetch_assoc($yourimplement)){
                     $yourown1 .= $yourrow['yourown'];
}
$yourown = "<div style='margin-left:20px;'>{$yourown1}</div>";



   



$ecx .= "<span>nsdghb nfbvhbfhvn v dfjvbhwenecx</span>";
$ecx1 .= "<div>hi this ecx1</div>";



      $splitsides = "<div style='width:100%;'>
      <div style='float:left;background-color:#fefefe;width:68.8%;height:100%;font-size:{$font_size};'> {$summary} {$workheader} {$experience} {$schoolheader} {$education}  {$certificationheader} {$certification}  {$accomplishheader} {$accomplishment} {$interestheader}{$interests}{$yourheader} {$yourown} </div>

      <div style='float:right;width:29%;background-color:#f3f3f3;height:100%;padding-left:10px;font-size:{$font_size};'>{$personal} {$skillheader} {$skill} {$softwareheader} {$software}<br> {$languageheader} {$language} </div>
      </div>";










$mpdf->WriteHTML($contactdata);
$mpdf->writeHTML($splitsides);
//$mpdf->writeHTML($experience);











$mpdf->Output("{$bala}.pdf",'I');
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);

?>