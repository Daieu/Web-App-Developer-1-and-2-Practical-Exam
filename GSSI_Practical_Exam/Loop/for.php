<?php
$i=0;
echo "Odd Numbers from 0 to 10: ";
do{
    if($i % 2 != 0){    //checks if the number is odd number
        echo "$i ";     //displays the odd numbers
    }
    $i++;

}while($i <= 10);       //checks if the condition of number is less than or equal to 10.
?>