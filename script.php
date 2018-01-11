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
    if(!file_exists($file)){
        echo "File not exists".PHP_EOL;
        $file = '';
    }
}
$str = file_get_contents($file);

try {
    echo BracketChecker::IsCorrect($str);
}
catch(Exception $e){
    echo $e->getMessage();
}

