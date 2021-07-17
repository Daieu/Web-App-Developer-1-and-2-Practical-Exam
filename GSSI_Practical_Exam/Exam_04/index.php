<?php  
// Declare the two dates
$d1 = strtotime("2019-05-31"); 
$d2 = strtotime("2018-04-05"); 
echo "2019-05-31<br>";
echo "2018-04-05<br>";
$diff = abs($d2 - $d1);                                                 // Formulate the difference between two dates
$y = floor($diff / (365*60*60*24));                                     // formula to get the year.
$m = floor(($diff - $y * 365*60*60*24)/ (30*60*60*24));                 // formula to get the months.
$d = floor(($diff - $y * 365*60*60*24 - $m*30*60*60*24)/ (60*60*24));   // formula to get the days.
echo "<br>Result: <br>$y Year, $m Month, $d Days";                      //display the result
?>