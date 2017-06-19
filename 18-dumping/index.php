<?php

$names = ['alex' => 27, 'billy' => 23];

var_dump($names);


$users = [
  ['name' => 'alex', 'age' => 27],
  ['name' => 'billy', 'age' => 23],
]

var_dump($users);

// Installing xdebug can get nicer output when var_dump

// Another way we can have nicer output is as follow:
echo '<pre>', var_dump($users), '</pre>';

// Less verbose and readble output than var_dump
print_r($names);
echo '<pre>', print_r($users), '</pre>';
