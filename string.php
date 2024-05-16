<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels
    $vowelCount = preg_match_all('/[aeiou]/i', $string, $matches);
    
    // Reverse the string
    $reversedString = strrev($string);
    
    // Print original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString <br>";
}
?>
