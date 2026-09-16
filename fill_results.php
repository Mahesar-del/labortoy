<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$pages = \App\Models\TestPage::all();

$dummyResults = [
    ['title' => 'Normal / Reference Range', 'description' => 'Indicates that your levels fall within the expected range for a healthy individual.'],
    ['title' => 'Borderline Results', 'description' => 'Values that are slightly outside the normal range. May require monitoring or lifestyle adjustments.'],
    ['title' => 'Follow-up Testing', 'description' => 'Your doctor may recommend additional specialized tests to confirm the diagnosis or identify the root cause.']
];

foreach($pages as $page) {
    $results = \Illuminate\Support\Facades\DB::table('test_page_results')->where('test_page_id', $page->id)->get();
    
    $currentCount = count($results);
    if ($currentCount > 0 && $currentCount < 3) {
        $needed = 3 - $currentCount;
        for ($i = 0; $i < $needed; $i++) {
            \Illuminate\Support\Facades\DB::table('test_page_results')->insert([
                'test_page_id' => $page->id,
                'title' => $dummyResults[$i]['title'],
                'description' => $dummyResults[$i]['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        echo "Added $needed dummy results to: " . $page->slug . "\n";
    }
}
