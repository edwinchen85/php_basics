<?php

include 'hello.php';
echo 'The rest of our code.';   // This will output if hello.php is not found

require 'hello.php';  // Better to use this
echo 'The rest of our code.';   // This won't output if hello.php is not found

include_once 'hello.php';
include_once 'hello.php';
include 'hello.php';
include_once 'hello.php';
// This will output only once Hello into screen without warning


require_once 'hello.php';
require_once 'hello.php';
require 'hello.php';
require_once 'hello.php';
// It will stop execution when there is same file being required more than once. Recommended method to use this.




require_once 'functions/user.php';

echo fullName('Alex', 'Garrett');
