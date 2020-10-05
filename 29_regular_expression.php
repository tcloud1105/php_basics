<?php 
// regular expression
// * greedy: match as many contents as possible
$string = "<a href='destination.php'>click</a>";
$pattern = "/<.*>/U";
preg_match($pattern,$string,$match)
var_dump($match);

// what if you need to test if a string contains 
// certain words
// [[:<:]]word[[:>:]]
$string = "do this string contain the word apple";
//$pattern="/[[:<:]]word[[:>:]]/";
$pattern="/\bword\b/";
var_dump(preg_match($pattern,$string,$match));
?>