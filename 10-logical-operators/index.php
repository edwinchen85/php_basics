<?php

if (true && true && false) {
  echo 'Hello.';
}

$username = 'alex';
$password = 'ilovecats';

if ($username = 'alex' && $password =='ilovecats') {
  echo 'You are in!';
}


$dayOfWeek = 6;

if ($dayOfWeek == 6 || $dayOfWeek == 7) {
  echo 'The weekend is here!';
}


$dayOfWeek = 7;
$workingTheWeekend = true;

if (($dayOfWeek = 6 || $dayOfWeek ==7) && !$workingTheWeekend) {
  echo 'You have a day off!';
}
