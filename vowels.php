// Create a function to count the number of vowels in a given string

<?php
$string = "good morning";
$count_vowels=preg_match_all("/[aeiou]/i",$string,$match);
echo "count Vowels:".$count_vowels;
?>