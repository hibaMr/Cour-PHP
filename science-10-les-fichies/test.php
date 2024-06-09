<?php

$path = '/dir/dir1/myfille.php';

$fille = 'test.php';

//return fillename
$output = basename($path);

//return fillename without extension
$output = basename($path,'.php');

//return the diename
$output = dirname($path);

//check if fille exists
$output = file_exists('test.php');

//get absolute path
$output = realpath($fille);

//check if it is file
$output = is_file($fille);

//check if fille is writable
$output= is_writable($fille);

//check if fille is readable
$output = is_readable($fille);

//get filesize
$output = filesize($fille);

echo $output;


//copy fille
copy('test.php','file2.txt');

//rename file
rename('test.php','phpfile.php');

