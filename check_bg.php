<?php

use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$pages = DB::table('test_pages')->select('id', 'title', 'bg_image')->get();
echo json_encode($pages, JSON_PRETTY_PRINT);
