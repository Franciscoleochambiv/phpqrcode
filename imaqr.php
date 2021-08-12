 <?php    

 include "qrlib.php"; 
 $filename="lolo.png";
 $errorCorrectionLevel = 'L';
 $matrixPointSize = 4;
QRcode::png('1245789654236)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
QRtools::timeBenchmark();
 ?>