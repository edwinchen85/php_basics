<?php

$quotes = [
  [
    'author' => 'Antoine De Saint',
    'text' => 'A designer knows he has achieved perfection not when there is nothing left to add, but when there is nothing left to take away.',
  ],
  [
    'author' => 'Benjamin Franklin',
    'text' => 'An investment in knowledge always pays the best interest.',
  ],
  [
    'author' => 'John Updike',
    'text' => 'Dreams come true. Without that possibility, nature would not incite us to have them.',
  ],
  [
    'author' => 'Socrates',
    'text' => 'The life which is unexamined is not worth living.',
  ],
  [
    'author' => 'Aristotle',
    'text' => 'We cannot learn withou pain.',
  ],
];

// Randomly pluck out from an array, cleaner way.
$quote = array_rand($quotes);
var_dump($quote);   // This return an random index of the arry. Eg: int(1) or int(2) ...

// Kill the execution of the script. Anything below won't run.
// die();
// exit();

// $quote = $quotes[rand(0, count($quotes) -1)];
// var_dump($quote);
$quoteText = $quote['text'];
$quoteAuthor = $quote['author'];

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Random Quote Generator</title>
</head>
<body>
  <blockquote>
    <!-- <h2>&ldquo;<?php echo $quoteText; ?>&rdquo;</h2> -->
    <h2>&ldquo;<?=$quoteText ?>&rdquo;</h2>
    <strong>- <?php echo $quoteAuthor; ?></strong>
  </blockquote>
</body>
</html>
