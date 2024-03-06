<?php 
class myfactorial {
public function factorial($n){
    if($n==0){
    return 1;
        }
        else{
            $factorial=1;
            for($i=1; $i<=$n;$i++){
                $factorial*=$i;
            }
            return $factorial;
        }
}
}
$obj = new myfactorial();
//print_r($obj);
echo $obj->factorial(6);
