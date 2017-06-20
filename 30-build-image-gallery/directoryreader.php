<?php

function directoryReader ($directory, array $excludeFiles = ['.', '..', '.DS_Store']) {
  // loop through the files
  // do some checks
  // add to $images
  // return $images

  $files = [];

/*
  if (!is_dir($directory)) {
    return null;
  }
*/

  // return true;

  // Check whether can open the directory
  // Get a warning if directory can not be opened
  if (!($filesDirectory = opendir($directory))) {
    return null;
  }

  while (($file = readdir($filesDirectory)) !== false) {
    // var_dump($file);

    // bool in_array ( mixed $needle, array $haystack )
    if (in_array($file, $excludeFiles)) {
      continue;
    }

    $files[] = $directory . '/' . $file;
  }

  closedir($filesDirectory);

  return $files;

}
