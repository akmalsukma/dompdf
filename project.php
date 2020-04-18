<?php 
    require 'vendor/autoload.php';
    use Dompdf\Dompdf ;


$dompdf = new Dompdf();
$dompdf->loadHtml('Nama Saya Akmal Permata Sukma');
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('hasil_dompdf.pdf');
                    
                    
?>