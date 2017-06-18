<?php

$weather = 'sunny';

echo 'The current weather is ';
echo $weather;

// Rather than do above, do below
echo 'The current weather is ' . $weather;


$degrees = 30.5;
echo $status = 'The current weather is ' . $weather . ' and it\'s ' . $degrees . ' degrees';

// Neater way is to use variable parsing - double quotes ""
echo $status = "The current weather is $weather and it's $degrees degrees";
// Or
echo $status = "The current weather is {$weather} and it's {$degrees} degrees";


$name = 'alex';

// Work with echo
echo 'My name is ', $name;
// Doesn't work here
$text = 'My name is ', $name;
// Dot works here which is good practice
$text = 'My name is ' . $name;
