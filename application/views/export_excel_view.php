<?php  
 //excel.php  
 header('Content-Type: application/pdf');  
 header('Content-disposition: attachment; filename='.rand().'.pdf');  
 echo $a;
 ?>  