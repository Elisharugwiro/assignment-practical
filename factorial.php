<?php
function fac($num){
     $v=1;
               for ($i=1; $i <= $num; $i++) { 
                $v=$v*$i;
               }
               return $v;
}


$num = 5;
$fact = fac($num);
printf("Factorial of %d is %d",$num,$fact);
?>