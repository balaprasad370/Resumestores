
<?php



$conn = mysqli_connect("localhost", "root", "", "live");

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






//contact fetch


$workfetch = "select * from work where sessionid = '123654789'; ";
$workimplement = mysqli_query($conn, $workfetch);
$worknorows = mysqli_num_rows($workimplement);


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
  // $workdescription[$workdescvar++] = $workrow['workdescription'];

}


$workheader = "<div style='padding:0 0 0 20px;width:100%;height: 30px;color:{$tempcolor}' ><div style='width:30px;float:left;padding-right:10px;'><svg viewBox='0 0 42 42'>
<rect x='0' y='0' height='42' width='42' fill='{$font_icon_color}'></rect>
<path fill='#fff' transform='translate(5,5)' d='M30 5.983h-7.987V4.045c0-1.655-1.345-3-3-3h-6.015c-1.655 0-3 1.345-3 3v1.938H2.001C.9 5.983 0 6.883 0 7.982V28.953c0 1.1.9 2.001 2 2.001h28c1.099 0 2-.9 2-2V7.981a2.008 2.008 0 0 0-2-1.999zM12 4.045c0-.551.447-1 1-1h6.011c.55 0 1 .447 1 1v1.938H12V4.045zM2 7.982h28v7.008H18.986v-1.025c0-1.101-.897-2-1.998-2h-1.993c-1.101 0-2 .897-2 2v1.025H2V7.982zm14.989 11.02h-1.993v-5.037h1.993v5.037zM2 28.951V16.988h10.997V19c0 1.102.897 2 2 2h1.99a2.002 2.002 0 0 0 2-2v-2.01h11.011v11.963H2.001z'></path>
</svg></div><div style='height:30px;float:right;padding-top:5px;font-size:{$font_size_header};'><strong>Work History</strong></div></div>{$hr}";

$experience = '';

for ($j = 0; $j <$worknorows; $j++) {
 
  $experience .= "<div style='width:100%;'>
                                  
                                        <div style ='float:left;width:15%;'> 
                                        <p style='margin:0 0 0 20px;'><strong>{$jobstart[$j]}</strong></p>
                                        <p style='margin:0 0 0 20px;'><strong>{$jobend[$j]}</strong></p>
                                        </div>

                                        <div style='float:right;width:83%;'>

                                        <p style='font-size:14px;padding-top:0;margin:0;'><strong>{$job[$j]}</strong></p>
                                        <p style='margin:0;'><em>{$employer[$j]} , {$jobcity[$j]}, {$jobstate[$j]}</em></p>
                                        <div style='margin:3px 0 0 0 ;'></div>
                                        <p>$worknorows</p>
                                        </div>
                                  
                                 
                                  </div>";
}






$mpdf->WriteHTML($workheader);
$mpdf->WriteHTML($experience);


//$mpdf->writeHTML($experience);











$mpdf->Output("{$bala}.pdf", 'I');
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);

?>