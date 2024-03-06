<?php
class myfuctorial {
    public function Fuctorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            $Factorial = 1;
            for ($i = 1; $i<=$n; $i++) {
                $Factorial*= $i;
            }
            return $Factorial;
        }
    }
}

$myfactorial = new myfuctorial();
echo $myfactorial->Fuctorial(5); // Output: 120
