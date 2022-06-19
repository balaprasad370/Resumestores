
<?php
require_once __DIR__ . '/vendor/autoload.php';



$mpdf = new \Mpdf\Mpdf([
    'format' => 'A4',
    //'orientation' => 'L',
    'margin_left' => 0,
    'margin_right' => 0,
    'margin_top' => 0,
    'margin_bottom' => 10,
    'margin_header' => 0,
    'margin_footer' => 0,
]);

$data  = '';
$data2 = '';

$data .= "<div style='width:100%;padding-top:50px;'>
          <div style='float:left;background-color:#366345;width:40%;'>this is left side </div>
          <div style='float:right;width:58%;background-color:#000fff;'>this is right side </div>
          </div>
";

$data2 = "<div style='width:100%;'>
<div style='background-color:#366345;width:40%;'>this is left side </div>
<div style='width:58%;background-color:#000fff;'>this is right side </div>
</div>
";

$mpdf -> WriteHTML($data2);
$mpdf -> WriteHTML($data);


$mpdf->Output("{$bala}.pdf",'I');
$mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/tmp']);


?>