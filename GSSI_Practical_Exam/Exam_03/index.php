<?php
function Fibonacci($n){  
    $i = 1;  
    $counter = 0;
    $s1=0;
    $s2=0;
    while ($counter < $n){
        $s1 = 5*(pow($i, 2))+4;                                              //Formula for numbers if Fibonacci or not.
        $s2 = 5*(pow($i, 2))-4;                                              
        if(floor(sqrt($s1)) === sqrt($s1) || floor(sqrt($s2)) === sqrt($s2)){   //checks condition if it is a perfect square.
            echo "$i is a Fibonacci Number. <br>";                           //Displays valid fibonacci number.
        }
        else{
            echo "$i is not a Fibonacci Number. <br>";                       //Displays invalid fibonacci number.
        }
        $i++;
        $counter++;
    }
}
$n = 10;
Fibonacci($n);
?>