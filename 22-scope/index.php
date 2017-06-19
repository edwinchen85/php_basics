<?php

$config = [
  'separator' => '_',
];

function fullName($firstName, $lastName, $config) {
  return "{$firstName}{$config['separator']}{$lastName}";
}

echo fullName('Alex', 'Garrett', $config);



function fullName($firstName, $lastName) {
  global $config;
  return "{$firstName}{$config['separator']}{$lastName}";
}

echo fullName('Alex', 'Garrett');



$fullName = function ($firstName, $lastName) use ($config) {
  return "{$firstName}{$config['separator']}{$lastName}";
}

echo $fullName('Alex', 'Garrett');
