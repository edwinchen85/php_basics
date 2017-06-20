<?php

echo "Hi there, {$_POST['name']}!";
// output: Hi there, Alex!

// Set redirect using full path
header('Location: http://localhost:8888/index.php');




$name = $_POST['name'] ?? null;

if ( empty( trim($name) ) ) {
  // Set redirect using full path
  header('Location: http://localhost:8888/index.php');
}
