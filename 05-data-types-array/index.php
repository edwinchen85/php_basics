<?php

$name1 = 'alex';
$name2 = 'billy';

$names = Array();
$names = ['alex', 'billy', 'dale'];

// echo won't work with array like this
echo $names;

var_dump($names);

// echo works here
echo $names[0];   // alex
echo $names[1];   // billy
echo $names[2];   // dale

$names[] = 'josh';

echo $names[3];   // josh
