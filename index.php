<?php
require_once 'vendor/autoload.php';

$file='README.md';
if(!is_file($file)) exit('README.md not found!'); 
$contents = file_get_contents($file);
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
