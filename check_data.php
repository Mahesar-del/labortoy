<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$pages = \App\Models\TestPage::all();
foreach($pages as $page) {
    echo $page->slug . "\nSpecimen: " . $page->specimen_items . "\nPrep: " . $page->preparation_items . "\n\n";
}
