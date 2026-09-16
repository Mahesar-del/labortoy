<?php

use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$tests = DB::table('tests')->where('is_active', 1)->select('id', 'name', 'service_id')->get();
echo json_encode($tests, JSON_PRETTY_PRINT);
