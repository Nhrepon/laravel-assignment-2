<?php
$strings = ["Hello", "World", "PHP", "Programming"];
$vowel=["a", "e", "i", "o", "u"];

for($item = 0; $item < count($strings); $item++) {
    $stringValue= $strings[$item];
    $total=[];
    for ($i = 0; $i < strlen($stringValue); $i++) {
        for ($v = 0; $v < count($vowel); $v++) {
            if ($stringValue[$i] == $vowel[$v]) {
                $total[] = $stringValue[$i];
            }
        }
        
    }
    
        echo "Original String: $strings[$item], Vowel Count: ".count($total).", Reversed String: ".strrev($stringValue)."\n";
    
}



?>