<?php
$i = 0;
$s = 0;
while($i <= 10 && $i % 2 == 0){                     //continuously loops until it is less than or equal to 10 and is even numbers
    $s = $s + $i;                                   //sums the even numbers
    $i = $i++;                                      //increment the number
}
echo "The Sum of all even numbers: $s";             //displays the total sum
?>