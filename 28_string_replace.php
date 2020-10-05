<?php
//str_replace()
/*
1. to be replaced
2. replace into what
3. the string
4. how many parts have been replaced
*/

$string="abcd0ef0ghijklmnopq0rs0tuv0vwxyz";
// 0 => zero
 var_dump(str_replace(0,"-zero-",$string,$counter));
 echo $counter;
?>