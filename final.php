
<?php



$conn = mysqli_connect("localhost", "root", "", "live");

require_once __DIR__ . '/vendor/autoload.php';



$mpdf = new \Mpdf\Mpdf([
  'format' => 'A4',
  // 'orientation' => 'L',
  'margin_left' => 5,
  'margin_right' => 5,
  'margin_top' => 20,
  'margin_bottom' => 0,
  'margin_header' => 0,
  'margin_footer' => 0,
]);

$stylesheet = file_get_contents('pdfstyles.css'); // external css
$mpdf->WriteHTML($stylesheet, 1);

// styles 
$font_size = '12px';
$font_size_icon = '20';
$font_size_header = '16px';
$font_icon_color = '#003d74';



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

//languages
$languages = '';


//certifications

$certificatename = '';
$certificatedate = '';

//accomplishments
$accomplishment = '';




$bala = "balaprasad";




//contact fetch

$contactfetch = "SELECT * from contact where  sessionid = '123654789';";
$contactimplement = mysqli_query($conn, $contactfetch);

while ($contactrow = mysqli_fetch_assoc($contactimplement)) {
  $contactdata .= "<div style='width:100%;padding-left:20px;height:100px;font-size:24px;line-height:39px;padding-top:10px;' class='header'>
   <h2 style='font-size:36px;margin-bottom:0;'>{$contactrow['firstname']} {$contactrow['lastname']}</h2> <span class='header'>{$contactrow['profession']}</span></div>";
}
//    $contactheader = "<div style='padding:0 0 0 0;width:100%;height: 30px;' class='header'><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
//    <rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
//    <path fill='#fff' transform='translate(5,5)' d='M31.85 27.626c-1.38-3.684-3.906-4.604-5.973-4.835-1.608-.23-3.216-.92-3.905-1.38v-2.533c1.838-2.302 2.986-5.295 2.986-7.828C24.958 4.835 21.972 0 16 0c-5.972 0-8.958 5.065-8.958 11.05 0 2.763 1.148 5.756 2.986 7.828v2.762c-.69.46-2.297.921-3.905 1.382-2.067.23-4.364 1.15-5.972 4.834-.23.46-.23 1.151.23 1.612C1.759 31.54 9.798 32 16 32c6.432 0 14.241-.46 15.62-2.532.459-.46.459-1.151.23-1.842zM16 1.842c4.594 0 7.152 4.394 7.152 9.228-.28 4.546-2.666 8.112-7.232 8.456-4.449-.462-6.926-4.804-7.04-8.573 0-4.604 2.526-9.111 7.12-9.111zm0 28.086c-12.174 0-14.012-1.611-14.012-1.611 1.149-2.993 2.757-3.454 4.365-3.684 1.837-.23 3.675-.92 4.594-1.381l.918-.46v-2.073c1.149.921 2.527 1.382 4.135 1.382 1.378 0 2.756-.46 3.905-1.382v2.072l.919.46c.918.461 2.756 1.152 4.594 1.382 1.607.23 3.215.69 4.364 3.684.23 0-1.608 1.611-13.782 1.611z'></path>
//  </svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Personal</strong></div></div>{$hr}";

//   $personal .= "<div style='padding-top:0;'>
//                          <strong>Address</strong> 
//                  <p style='margin:0;padding:0;'>{$contactrow['city']},{$contactrow['state']},{$contactrow['zip']}</p><br/>

//                  <strong> Phone </strong>
//                    <p style='margin:0;padding:0;'>{$contactrow['phone']}</p><br/>

//                  <strong> Email </strong> 
//                   <p style='margin:0;padding:0;'>{$contactrow['email']}</p><br/>

//                   </div>";
// }



//summary
$summaryfetch = "select * from summary where sessionid = '123456789'; ";
$summaryimplement = mysqli_query($conn, $summaryfetch);
while ($summaryrow = mysqli_fetch_assoc($summaryimplement)) {
  $summary1 = trim($summaryrow['summary']);
}

$summary = "<div style='padding:0 20px 10px 20px;text-align:justify;font-size:{$font_size};' >{$summary1}</div>";

$summary2 = "";
$summary2 = "<div style='page-break-before: inside;'>Seeking an entry-level position to begin my career in a high-level professional environment. To secure employment with a reputable
company, where I can utilize my skills and business studies background to the maximum. Seeking a challenging career with an MNCSeeking an entry-level position to begin my career in a high-level professional environment. To secure employment with a reputable
company, where I can utilize my skills and business studies background to the maximum. Seeking a challenging career with an MNCSeeking an entry-level position to begin my career in a high-level professional environment. To secure employment with a reputable
company, where I can utilize my skills and business studies background to the maximum. Seeking a challenging career with an MNCSeeking an entry-level position to begin my career in a high-level professional environment. To secure employment with a reputable
company, where I can utilize my skills and business studies background to the maximum. Seeking a challenging career with an MNCSeeking an entry-level position to begin my career in a high-level professional environment. To secure employment with a reputable
company, where I can utilize my skills and business studies background to the maximum. Seeking a challenging career with an MNCSeeking an entry-level position to begin my career in a high-level professional environment. To secure employment with a reputable
company, where I can utilize my skills and business studies background to the maximum. Seeking a challenging career with an MNCSeeking an entry-level position to begin my career in a high-level professional environment. To secure employment with a reputable</div>";



//accomplishments

//accomplishments header
$accomplishheader = "<div style='padding:0 0 0 20px;width:100%;height: 30px;' class='header'><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
<rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
<path fill='#fff' transform='translate(5,5)' d='M32 7.438c0 5.312-5.25 9.437-8.375 11.5-.063.062-.125.187-.188.25 0 0-.187.25-1.375 1.75-.875 1.25-1.812 2.812-1.812 4.687 0 1.5 1.25 3.063 2.563 4.25h2.812V32H6.375v-2.125h2.813c1.312-1.188 2.562-2.75 2.562-4.25 0-1.688-.938-3.375-1.75-4.625-.563-.625-1-1.25-1.438-1.938C5.5 17.063 0 12.875 0 7.5 0 4 2.688 3.312 4.25 3.25c-.063-2 0-3.25 0-3.25h23.5s.063 1.25 0 3.188c1.563.124 4.25.75 4.25 4.25zM2.125 7.5c.25 3.563 2.875 6.563 4.688 8.188-1.5-3.563-2.125-7.376-2.375-10.376-1 .063-2.438.5-2.313 2.188zm23.5-5.375H6.375s-.563 11.188 4.875 17.5c.75 1 2.625 4.563 2.625 6 0 2.625-2.125 4.25-2.125 4.25h8.5s-2.125-1.688-2.125-4.25c0-3.313 2.813-6.375 2.813-6.375 5.187-5.5 4.687-17.125 4.687-17.125zm2 3.188c-.25 3-.75 6.75-2.063 10 1.75-1.688 4.125-4.5 4.313-7.876.125-1.687-1.25-2.062-2.25-2.125z'></path>
</svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Accomplishments</strong></div></div>{$hr}";

$accomfetch = "select * from accomplishments where sessionid = '123456789'; ";
$accomimplement = mysqli_query($conn, $accomfetch);
while ($accomrow = mysqli_fetch_assoc($accomimplement)) {
            $accomplishment123 = $accomrow['accomplish'] ;
  $accomplishment1  .=   "<div>" .$accomplishment123 . "</div>";
  // $accomplishment = "<span style='margin:3px 0 0 15px;'>{$accomplish1}</span>";
}
$accomplishment789 = "<div style='margin-bottom:15px;'>{$accomplishment1}</div>";

if($accomplishment123  == NULL){
 $accomplishheader = '';
}
//page-break-before:always

$accomplishment786 = "<div style=''> about your backgroundBriefly tell us about your backgroundBriefly tell us about your
backgroundBriefly tell us about your backgroundBriefly tell us about your backgroundBriefly tell
us about your backgroundBriefly tell us about your backgroundBriefly tell us about your
backgroundBriefly tell us about your backgroundBriefly tell us about your backgroundBriefly tell
us about your backgroundBriefly tell us about your backgroundBriefly tell us about your
backgroundBriefly tell us about your backgroundBriefly tell us about your backgroundBriefly tell
us about your backgroundtell us about your backgroundBriefly tell us about your backgroundBriefly tell
us about your backgroundBriefly tell us about your backgroundBriefly tell us about your
backgroundBriefly tell us about your backgroundBriefly tell us about your backgroundBriefly tell
us about your backgrountell us about your backgroundBriefly tell us about your backgroundBriefly tell
us about your backgroundBriefly tell us about your backgroundBriefly tell us about your
backgroundBriefly tell us about your backgroundBriefly tell us about your backgroundBriefly tell
us about your backgrountell us about your backgroundBriefly tell us about your backgroundBriefly tell
us about your </div>";

$jk = "<div style='width:100%;'>
<div style='float:left;width:30%; page-break-inside:avoid;'>{$accomplishment786}</div>
<div style='float:right;width:60%;'> {$accomplishment789}</div>
</div>";





// $mpdf->SetColumn(2, 'J', 2);
$mpdf->SetColumns(2);

$desc = "<div style='background:#d3d3d3;'>thisd dfjvhsdf sdf nsdjfndf  sdfjndjfnj thisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnj</div>";

$desc2 = "<div style='background:#f3f3f3;margin:10px 0;page-break-inside:avoid;'>thisd dfjvhsdf sdf nsdjfndf  sdfjndjfnj thisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnjthisd dfjvhsdf sdf nsdjfndf  sdfjndjfnj
</div>";


$fd = "<div><div style='width:100%;'>{$desc}</div><columnbreak /><div style='width:100%;'> {$desc2}  {$desc2} {$desc2} </div></div>";


$mpdf->WriteHTML($fd);
// $mpdf->AddColumn();
// $mpdf->WriteHTML($desc2);
// $mpdf->WriteHTML($desc2);
// $mpdf->WriteHTML($desc2);
// $mpdf->WriteHTML($desc2);


// $no = $mpdf->AliasNbPages('[pagetotal]');


//   $mpdf->WriteHTML($no);



// $mpdf->WriteHTML($summary2);
// $mpdf->WriteHTML($summary2);
// $mpdf->WriteHTML($accomplishment789);
// $mpdf->WriteHTML($accomplishment786);
// $mpdf->WriteHTML($jk);
// $mpdf->writeHTML($splitsides);

//$mpdf->writeHTML($experience);











$mpdf->Output("{$bala}.pdf", 'I');
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);

?>