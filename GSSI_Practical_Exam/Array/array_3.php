<?php
$array = array("red", "blue", "black", "red", "blue", "blue", "blue", "red", "gold");
$array1 = array();
for($a = 0; $a<= 8; $a++){
    $c = 0;                                 //initializes the counter to 0.
    for($b = 0; $b <= 8; $b++){
        if($array[$a] == $array[$b]){       //checking to see whether the condition has a duplication.
            $c++;                           //increment counter
        } 
    }
    if($c == 1){                            //If the counter is more than one, it indicates that there are duplicates.
        array_push($array1, $array[$a]);    //If counter is only one, the value will be replicated to another array.
    }
}
echo "List of Colors that isn't repeated: ";
print_r($array1);                           //printing the array with only unique values.
?>