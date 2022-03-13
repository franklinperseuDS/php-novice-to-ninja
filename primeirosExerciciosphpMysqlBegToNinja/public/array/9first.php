<?php

$myArray = ['one' ,2 ,3];
print_r( $myArray);

$myArray[1] = "two";
$myArray[3] = 'four';
echo '<br>';
print_r($myArray);
$myArray[] = 'five';
echo '<br>';
print_r($myArray);

$myArray['nome'] = 'Thomas';
echo '<br>';
print_r($myArray);
?>