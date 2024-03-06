<?php 
 function Fuctorial($n){
    if($n==0){
        return 1;
    }else{
        return $n * Fuctorial($n-1);
    }
 }
 $n = Fuctorial(5);
 echo $n;