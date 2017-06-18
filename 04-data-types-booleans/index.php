<?php

// Boolean
$fileIsUploaded = false;
$fileIsUploaded = true;

if ($fileIsUploaded) {
  echo 'Your file is uploaded.';
}


// Truthy value
$fileIsUploaded = 1;
$fileIsUploaded = -1;

// Falsey value
$fileIsUploaded = 0;


$isInt = is_int(1);

if (isInt) {
  echo 'That is an integer.';   // This will print
}

$isInt = is_int('alex');

if (isInt) {
  echo 'That is an integer.';   // This won't print
}

var_dump(is_int(1));
