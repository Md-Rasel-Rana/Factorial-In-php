<?php 
$num = 6; 
$Fuctorial = 1; // Define a variable

for ($i = 1; $i<$num; $i++) {
    $Fuctorial+= $Fuctorial * $i; // Accumulate the product in $total
}

echo $Fuctorial; // Output the total



