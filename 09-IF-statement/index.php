<?php

$dayOfWeek = 1;   // Monday

if ($dayOfWeek == 1) {
  echo 'It is Monday.';
} elseif ($dayOfWeek == 2) {
  echo 'It is Tuesday.';
} elseif ($dayOfWeek == 3) {
  echo 'It is Wednesday.';
} else {
  echo 'That is not a valid day.';
}


$dayOfWeek = 1;

$daysOfWeek = [
  1 => 'Monday',
  2 => 'Tuesday',
  3 => 'Wednesday',
];

var_dump(array_keys($daysOfWeek));

if (in_array($dayOfWeek, array_keys($daysOfWeek))) {
  echo $daysOfWeek[$dayOfWeek];   // Monday
} else {
  echo 'That is not a valid day.';
}


$name = 'Alexander James Garrett';
$name = null;   // Below conditional check evaluate to false

if ($name) {
  echo 'Your name is ' . $name;

  if (strlen($name) > 10) {
    echo '. Oh, and you have a very long name.';
  }
}


// Better way to do things
$name = 'Alexander James Garrett';

if (!$name) {
  return;   // Break the script here
}

echo 'Your name is ' . $name . '.';

if (strlen($name) > 10) {
  echo ' Oh, and you have a very long name.';
}
