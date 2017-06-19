<?php

// Function declaration
function fullName() {
  echo 'Alex Garrett';
}

// Function invocation
fullName();


function fullName() {
  return 'Alex Garrett';
}

echo fullName();


// Argument
function fullName($firstName, $lastName) {
  // return $firstName . ' ' . $lastName;
  return "{$firstName} {$lastName}";
}

echo $fullName = fullName('Alex', 'Garrett');


function firstName() {
  return 'Alex';
}

// Flexibility
$fullName = fullName(firstName(), 'Garrett');


// Passing variables as arguments
$firstName = 'Alex';
$lastName = 'Garrett';

$fullName = fullName($firstName, $lastName);


// Setting optional and default argument
// Optional always set at the end
function fullName($firstName, $lastName, $separator = ' ') {
  return "{$firstName}{$separator}{$lastName}";
}

$fullName = fullName('Alex', 'Garrett', '_');


// Function expression
$fullName = function ($firstName, $lastName, $separator = ' ') {
  return "{$firstName}{$separator}{$lastName}";
}

echo $fullName('Alex', 'Garrett');  // Note $fullName() not fullName().
