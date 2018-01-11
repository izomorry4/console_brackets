#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: izomo
 * Date: 11.01.2018
 * Time: 21:24
 */

require 'vendor/autoload.php';

$file = '';
while (!$file) {
    echo "Enter file with brackets: ";
    $file = trim(fgets(STDIN));
}
$str = file_get_contents($file);

try {
    BracketChecker::IsCorrect($str);
}
catch(Exception $e){
    $e->getMessage();
}

