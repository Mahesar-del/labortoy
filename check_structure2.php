<?php
$c = file_get_contents('c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/cbc-test.blade.php');
$start = strpos($c, '</style>', strpos($c, 'cbc-sp-section'));
echo substr($c, $start, 500);
