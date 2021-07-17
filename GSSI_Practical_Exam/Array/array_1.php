<?php 
$array = ["Marvin","Marco","Marvin","Marco","Marco","Marvin","Christian"]; 
$repeat = []; 
 
foreach (array_unique($array) as $i) { 
    $matches = array_filter($array, function ($value) use ($i) { 
        return $i === $value;                   //returns true if array in the word is equal to value, and if they are of the same type. 
    }); 
        $matchCounts = count($matches);         //counts strings in the new modified array.
        if ($matchCounts > 1) { 
            $repeat[] = $i;                     //inputs string in the another new array.
        } 
}
echo "Values that have the most occurence in alphabetical order: <br><br>";
sort($repeat);                                  //this function sorts the new array
foreach($repeat as $result){
    echo $result . "<br>";                      //displaying the new array
}
?>