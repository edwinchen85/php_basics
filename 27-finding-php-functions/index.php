<?php

var_dump(strnlen('alex'));   // output: int(4)


$name = 'Alex';
echo strtoupper($name);   // output: ALEX
echo strtolower($name);   // output: alex

$name = '       Alex      ';
echo strlen(trim($name)); // output: 4

$name = '.....Alex..........';
echo trim($name, '.');    // output: Alex

$name = '              Alex';
echo ltrim($name);        // output: Alex

$name = 'Alex              ';
echo rtrim($name);        // output: Alex

// Return part of a string
$name = 'billy';
echo substr($name, 0);    // output: billy
echo substr($name, 0, 1)  // output: b
echo substr($name, 0, 10) // output: billy
echo substr($name, 0, ceil(strlen($name / 2)));   // output: bil


// URL: localhost:8888/?page=
$page = $_GET['page'] ?? 1;

if (empty(trim($page))) {
  $page = 1;
}

echo $page;


// string number_format ( float $number, int $decimals = 0, string $dec_point = ".", string $thousands_sep = "," )
$number = 5.654734245;
echo $number_format($number, 2);  // output: 5.65

$number = 1000000000;
echo $number_format($number, 2);  // output: 1,000,000,000.00
echo $number_format($number, 0, ".", "_")   // output: 1_000_000_000.00


// Send a raw HTTP header.
header('Location: page.php');
// Quickly redirect to page.php after above line run.
