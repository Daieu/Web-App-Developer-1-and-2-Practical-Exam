<?php
$n1 = 0;
$n2 = 1;
$next;
echo "10 Digits in Fibonacci Sequence: $n1 $n2 ";
for($i = 0; $i < 10; ++$i){         //starts with 2 because 0 and 1 is declared on the int.
    $next = $n1 + $n2;              //sum of the previous 2 values
    echo "$next ";                  //prints the sum of previous values
    $n1= $n2;                       //substitutes the values of the first num to second num
    $n2= $next;                     //substitutes the second num to the new value for the next sequence
}
?>