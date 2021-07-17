<?php
$new = array(9863, 7127, 2020, 80, 131, 55, 100);
$i;
echo "Unsorted Array";
print_r($new);                              //Displays Unsorted array.
for($i=0; $i<=6; $i++){ 
    if($new[$i] % 10 != 0){                 //checks if number is divisile by 10.
        $round = round($new[$i], -1);       //round functions the number to the nearest 10.
    $new[$i] = $round;                      //get the value of rounded number.
    }
}
echo "<br><br>Sorted Array";
sort($new);                                 //Sort the array into ascending order
print_r($new);
?>