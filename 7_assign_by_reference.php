<?php
// value assignment between variables
$left = "left";
$right = "right";
$left = & $right;
$left = 'middle';
$right = 'new value of variable right';
echo 'the value of $left is '.$left;
echo '</hr>';
echo 'the value of $right is '.$right;
echo '</br>';

?>