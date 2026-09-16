<?php
use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$testPages = DB::table('test_pages')->get();

foreach ($testPages as $page) {
    $components = DB::table('test_page_components')
        ->where('test_page_id', $page->id)
        ->orderBy('id', 'asc')
        ->get();
    
    if ($components->count() > 4) {
        $idsToDelete = $components->slice(4)->pluck('id');
        DB::table('test_page_components')
            ->whereIn('id', $idsToDelete)
            ->delete();
    }
}
echo "Cleaned up excess components.\n";
