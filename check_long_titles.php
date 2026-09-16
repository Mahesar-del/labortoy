<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$components = \Illuminate\Support\Facades\DB::table('test_page_components')->get();
foreach ($components as $c) {
    if (strlen($c->title) > 15) {
        echo $c->id . ": " . $c->title . "\n";
    }
}
