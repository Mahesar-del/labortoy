<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$pages = \App\Models\TestPage::all();
foreach($pages as $page) {
    $updated = false;
    
    if ($page->specimen_items && str_starts_with($page->specimen_items, '["')) {
        $arr = json_decode($page->specimen_items, true);
        if (is_array($arr)) {
            $page->specimen_items = implode("\n", $arr);
            $updated = true;
        }
    }
    
    if ($page->preparation_items && str_starts_with($page->preparation_items, '["')) {
        $arr = json_decode($page->preparation_items, true);
        if (is_array($arr)) {
            $page->preparation_items = implode("\n", $arr);
            $updated = true;
        }
    }
    
    if ($updated) {
        $page->save();
        echo "Fixed formatting for: " . $page->slug . "\n";
    }
}
