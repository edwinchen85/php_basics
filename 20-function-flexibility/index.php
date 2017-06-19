<?php

function fullName($firstName, $lastName = null, $separator = '_') {

  if (trim($firstName) === '') {
    return;   // return NULL
  }

  if ($lastName === null) {
    return $firstName;
  }

  return "{$firstName}{$separator}{$lastName}";
}

echo fullName('Alex');
echo fullName('Alex', 'Garrett');
var_dump( fullName('    ') );   // return NULL
