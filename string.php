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



/* 
1.Problem Statement: Marks 40


Write a PHP program that takes an array of strings as input. Your program should iterate over each string in the array and perform the following operations:



Count the number of vowels (a, e, i, o, u) in each string.
2. Reverse each string.
3. Print the original string and the modified strings along with their vowel counts.


You must use this array of strings:
$strings = ["Hello", "World", "PHP", "Programming"];


Your Output must look like this:
Original String: Hello, Vowel Count: 2, Reversed String: olleH
Original String: World, Vowel Count: 1, Reversed String: dlroW
Original String: PHP, Vowel Count: 0, Reversed String: PHP
Original String: Programming, Vowel Count: 3, Reversed String: gnimmargorP
 */




?>