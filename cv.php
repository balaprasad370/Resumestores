<?php
/*
PHP 7.3.27 (cli) (built: Feb  2 2021 20:46:26) ( ZTS MSVC15 (Visual C++ 2017) x64 )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.27, Copyright (c) 1998-2018 Zend Technologies
*//*
$conn = mysqli_connect("localhost","root","","live");
 require_once __DIR__ . '/vendor/autoload.php';

 
 //require_once __DIR__ . '/pdfstyles.css';
 
 


//create new pdf instance
$mpdf = new \Mpdf\Mpdf();
//$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [215.9, 279.4]]);
$mpdf->SetDisplayMode('fullwidth');

//debug
$mpdf -> debug=true;

$stylesheet = file_get_contents('pdfstyles.css'); // external css
$mpdf->WriteHTML($stylesheet,1);

//create our pdf
$lname = "this l";
$fname = "this gf";


//Heading
$data = "";

//contact
$contact = "";

//summary
$summary = "";

$flexd = "";

$data .="<div style='width:100%;height:10%;color:#ffffff;' class='her' ><h1 style='font-size:36px;'>".$lname."</h1><h2 style='font-size:18px;'>".$fname."</h2></div>";
//$data .= "<div style='background-color:#373D48;width:100%;display:inline;color:#ffffff;'>{$fname}";
//$data .= "<div style='background-color:#373D48;width:100%;display:inline;color:#ffffff;'>{$fname}</div></div>";

$flexd .="<div style='display:flex;flex:no-wrap;'>";



            $fetch = "select * from contact where sessionid='123654789';";
            $contactres = mysqli_query($conn,$fetch);
            while($row = mysqli_fetch_assoc($contactres)){
                $contact .= "<div style='display:flex;flex:wrap;'>{$row['firstname']}</div>";
                $contact .= "<div style='display:flex;flex:wrap;'>".$row['lastname']."</div>";
                $contact .= "<div style='width:60%;'>".$row['profession']."</div>";
                $contact .= "<div style='width:60%;'>".$row['city']."</div>";
                $contact .= "<div style='width:60%;'>".$row['state']."</div>";
                $contact .= "<div style='width:60%;'>".$row['zip']."</div>";
                $contact .= "<div style='width:60%;'>".$row['email']."</div>";
                $contact .= "<div style='width:60%;'>".$row['phone']."</div>";
            }



$flexd .= "</div>";
/*
$mpdf->WriteHTML($data);
$mpdf->WriteHTML($contact);


$flexd .= "<div style='width:5%;height:10px;background-color:#378343;border-radius:50%;text-align:center;'>I</div>";


$mpdf->WriteHTML($data);
$mpdf->WriteHTML($flexd);

//output to browser
$mpdf->output('myfile.pdf','I');



$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);

*/
 require_once __DIR__ . '/vendor/autoload.php';



$mpdf = new \Mpdf\Mpdf([
    'format' => 'A4',
    'margin_left' => 0,
    'margin_right' => 0,
    'margin_top' => 0,
    'margin_bottom' => 0,
    'margin_header' => 0,
    'margin_footer' => 0,
]);

/*$img = "<div style='width:50px;height:50px;border-radius:10px !important;background:#000fff;'><img src='assets/img/team/team-1.jpg'></div>";
$mpdf->WriteHTML($img);
*/

$mpdf->WriteHTML('<h1>Hello World</h1> <h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1><h1>Hello World</h1>');
$mpdf->Output('filename.pdf','I');
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);

?>