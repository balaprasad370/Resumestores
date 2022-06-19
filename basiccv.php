<?php



$conn = mysqli_connect("localhost", "root", "", "live");

require_once __DIR__ . '/vendor/autoload.php';



$mpdf = new \Mpdf\Mpdf([


  'margin_left' => 0,
  'margin_right' => 0,
  'margin_top' => 0,
  'margin_bottom' => 10,
  'margin_header' => 0,
  'margin_footer' => 0,
]);

$stylesheet = file_get_contents('pdfstyles.css'); // external css
$mpdf->WriteHTML($stylesheet, 1);

//hr line 
$hr = "<hr style='margin-top:2px'>";


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

//Education

$education = '';

$schoolname = array();
$schoollocation = array();
$degree = array();
$fod = array();
$schoolstart = array();
$schoolend = array();


//software
$software = '';


$ecx = '';
$ecx1 = '';

$bala = "balaprasad";


//contact fetch

$contactfetch = "SELECT * from contact where  sessionid = '123654789';";
$contactimplement = mysqli_query($conn, $contactfetch);

while ($contactrow = mysqli_fetch_assoc($contactimplement)) {
  $contactdata .= "<div style='width:100%;color:#ffffff;padding-left:20px;background:#373D48;height:100px;font-size:24px;'>
   <h2 style='line-height:0;font-size:36px;margin-bottom:0;'>{$contactrow['firstname']} {$contactrow['lastname']}</h2> {$contactrow['profession']}</div>";

  $personal .= "<div >
                  <strong style='margin-bottom:0;'>Personal</strong> 
                  {$hr}  
                  
                 <strong>Address</strong>
                 <p>{$contactrow['city']},{$contactrow['state']},{$contactrow['zip']}</p><br/>

                 <strong> Phone </strong>
                   <p>{$contactrow['phone']}</p><br/>

                 <strong> Email </strong> 
                  <p>{$contactrow['email']}</p><br/>

                  </div>";
}



//summary
$summaryfetch = "select * from summary where sessionid = '123456789'; ";
$summaryimplement = mysqli_query($conn, $summaryfetch);
while ($summaryrow = mysqli_fetch_assoc($summaryimplement)) {
  $summary .= $summaryrow['summary'];
}

//skillsfetch
$skillfetch = "select * from skills where sessionid = '123456789'; ";
$skillimplement = mysqli_query($conn, $skillfetch);
while ($skillrow = mysqli_fetch_assoc($skillimplement)) {
  $skill1 = $skillrow['skills'];
  $skillexp = explode(",", $skill1);
  $skillcount = count($skillexp);
}
$skillheader = "<p><strong>Skills</strong></p>{$hr}";

for ($i = 0; $i < $skillcount; $i++) {
  $skill .= "<span style='line-height:3;'><p>{$skillexp[$i]}</p></span>";
}


//experience fetch
$jsvar = 0;
$jevar = 0;
$jobvar = 0;
$employervar = 0;
$jobcityvar = 0;
$jobstatevar = 0;
$workdescription = "this is goning to be fun i do know about it which you have know abuouyt ths very uch is not likely oto be oknerbrhe shdbhads ds vbsh";
$workfetch = "select * from work where sessionid = '123654789'; ";
$workimplement = mysqli_query($conn, $workfetch);
$worknorows = mysqli_num_rows($workimplement);
while ($workrow = mysqli_fetch_assoc($workimplement)) {
  $jobstart[$jsvar++] =  $workrow['jobstart'];
  $jobend[$jevar++] =  $workrow['jobend'];
  $job[$jobvar++] =  $workrow['job'];
  $employer[$employervar++] =  $workrow['employer'];
  $jobcity[$jobcityvar++] =  $workrow['city'];
  $jobstate[$jobstatevar++] =  $workrow['state'];
}

$workheader = "<p><strong>Experience</strong></p>{$hr}";

for ($j = 0; $j < $worknorows; $j++) {
  /*"<div style='width:100%;background-color: #383977;'>
                 <span style='width:20%;background-color: #383743;float:left;'><p>{$jobstart[$j]}</p><p>{$jobend[$j]}</p> </span> 
                 <span style='width:70%;background-color: #383977;float:right;'><p>{$jobstart[$j]}</p><p>{$jobend[$j]}</p> </span>
                 </div>";*/
  $experience .= "<table >
                                  <tr>
                                        <td style ='text-align:left;vertical-align:top;'> <p><strong>{$jobstart[$j]}</strong></p><p><strong>{$jobend[$j]}</strong></p>
                                        </td>
                                        <td style='text-align:left;width:500px;padding-left:15px;vertical-align:top;'>
                                        <p style='font-size:14px;padding-top:0;'><strong>{$job[$j]}</strong></p><p><em>{$employer[$j]} , {$jobcity[$j]}, {$jobstate[$j]}</em></p>
                                        <p style = 'line-height:3;'>{$workdescription}</p>
                                        
                                        </td>
                                  </tr>
                                  <br>
                                  </table>";
}


//Education
$schoolnamevar = 0;
$schoollocvar = 0;
$degreevar = 0;
$fodvar = 0;
$schoolstartvar = 0;
$schoolendvar = 0;
$schooldescription = "this is goning to be fun i do know about it which you have know abuouyt ths very uch is not likely oto be oknerbrhe shdbhads ds vbsh";
$schoolfetch = "select * from education where sessionid = '123654789'; ";
$schoolimplement = mysqli_query($conn, $schoolfetch);

$schoolnorows = mysqli_num_rows($schoolimplement);

while ($schoolrow = mysqli_fetch_assoc($schoolimplement)) {
  $schoolstart[$schoolstartvar++] =  $schoolrow['grst'];
  $schoolend[$schoolendvar++] =  $schoolrow['gred'];
  $schoolname[$schoolnamevar++] =  $schoolrow['scname'];
  $schoollocation[$schoollocvar++] =  $schoolrow['sclo'];
  $degree[$degreevar++] =  $schoolrow['degree'];
  $fod[$fodvar++] =  $schoolrow['fod'];
}

// education implement
$schoolheader = "<p><strong>Education</strong></p>{$hr}";

for ($j = 0; $j < $schoolnorows; $j++) {

  $education .= "<table >
                                  <tr>
                                        <td style ='text-align:left;vertical-align:top;'> <p><strong>{$schoolstart[$j]}</strong></p><p><strong>{$schoolend[$j]}</strong></p>
                                        </td>
                                        <td style='text-align:left;width:500px;padding-left:15px;vertical-align:top;'>
                                        <p style='font-size:14px;padding-top:0;'><strong>{$degree[$j]}</strong></p><p><em>{$schoolname[$j]} , {$schoollocation[$j]}<em></p>
                                        <p style = 'line-height:3;'>{$workdescription}</p>
                                        
                                        </td>
                                  </tr>
                                  <br>
                                  </table>";
}





//software implement
$softwarefetch = "select * from software where sessionid = '123456789'; ";
$softwareimplement = mysqli_query($conn, $softwarefetch);
while ($softwarerow = mysqli_fetch_assoc($softwareimplement)) {
  $software1 = $softwarerow['softwareskill'];
  $softwareexp = explode(",", $software1);
  $softwarecount = count($softwareexp);
}
$softwareheader = "<p><strong>Software</strong></p>{$hr}";

for ($soft = 0; $soft < $softwarecount; $soft++) {
  $software .= "<span style='line-height:3;'><p>{$softwareexp[$soft]}</p></span>";
}



$ecx .= "<span>nsdghb nfbvhbfhvn v dfjvbhwenecx</span>";
$ecx1 .= "<div>hi this ecx1</div>";


$splitsides = "<table style='width:100%;' class='tabler'>
<tr>
  <td class='leftside'>{$summary} {$workheader} {$experience} {$schoolheader} {$education} {$softwareheader} {$software} 
  </td>
  <td class='rightside'> {$personal} {$skillheader} {$skill} <br> {$softwareheader} {$software}</td>
</tr>

</table>";










$mpdf->WriteHTML($contactdata);
$mpdf->writeHTML($splitsides);
//$mpdf->writeHTML($experience);











$mpdf->Output("{$bala}.pdf", 'I');
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);
