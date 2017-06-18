// camelcase naming convention
// variables are loosely typed
// echo doesn't work with array and object

<?php

$name = 'alex';

echo $name;

$daysInWeek = 7;

echo $daysInWeek;

// Concatenation
echo 'There are ' . $daysInWeek . ' days in a week.';

// Assignment
$text = 'There are ' . $daysInWeek . ' days in a week.';

echo $text;

// Reassigment
$daysInWeek = 8;

echo $text;

// Assign and echo at the same time. Useful for testing.
echo $text = 'There are ' . $daysInWeek . ' days in a week.';
