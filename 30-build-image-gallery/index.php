<?php

$directory = opendir('images');

// var_dump($directory);

while ($imageFile = readdir($directory)) {
  var_dump($imageFile);
  // output:
  // string(1) "." string(2) ".." string(9) ".DS_Store" string(8) "cat1.jpg" string(8) "cat2.jpg" string(8) "cat3.jpg"
}



require 'directoryReader.php';

// This case display nothing
$images = directoryReader('images');

// This case will display 'Could not load files.'
// $images = directoryReader('cats');

if (!$images) {
  die('Could not load files.');
}

// var_dump($images);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gallery</title>
</head>
<body>
  <?php foreach ($images as $image): ?>
    <img src="<?php echo $image; ?>">
  <?php endforeach ?>
</body>
</html>
