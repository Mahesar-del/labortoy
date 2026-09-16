<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$pages = \App\Models\TestPage::all();
foreach($pages as $page) {
    echo "--- " . $page->slug . " ---\n";
    // Check components
    $components = \Illuminate\Support\Facades\DB::table('test_page_components')->where('test_page_id', $page->id)->get();
    echo "Components: " . count($components) . "\n";
}
