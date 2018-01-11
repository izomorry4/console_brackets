#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: izomo
 * Date: 11.01.2018
 * Time: 21:24
 */

$file = '';
while (!$file) {
    echo "Enter file with brackets: ";
    $file = trim(fgets(STDIN));
}
echo file_get_contents($file);
