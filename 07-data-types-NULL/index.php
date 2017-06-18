<?php

$name = null;
// Or
$name = NULL;

var_dump($name);


// Because we cannot declare like below
$name;  // undefined variable
var_dump($name);
// We have to set to NULL when we haven't decided what to give it in the beginning
$name = null;


$name = 'alex';

echo $name;   // alex

unset($name);

echo $name;   // undefined variable
var_dump($name);  // NULL


// Best practice to clear a variable is to set to NULL
$name = null;
