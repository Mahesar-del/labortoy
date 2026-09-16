<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$pages = \App\Models\TestPage::all();

$dummyComponents = [
    ['title' => 'Clinical Significance', 'description' => 'Provides critical insights into your overall health and helps diagnose underlying conditions.'],
    ['title' => 'Diagnostic Accuracy', 'description' => 'Utilizes state-of-the-art laboratory equipment for precise and reliable results.'],
    ['title' => 'Patient Monitoring', 'description' => 'Essential for tracking the progression of diseases and the effectiveness of treatments.'],
    ['title' => 'Preventative Health', 'description' => 'Helps identify risk factors early, allowing for timely lifestyle interventions.']
];

foreach($pages as $page) {
    $components = \Illuminate\Support\Facades\DB::table('test_page_components')->where('test_page_id', $page->id)->get();
    
    $currentCount = count($components);
    if ($currentCount > 0 && $currentCount < 4) {
        $needed = 4 - $currentCount;
        for ($i = 0; $i < $needed; $i++) {
            \Illuminate\Support\Facades\DB::table('test_page_components')->insert([
                'test_page_id' => $page->id,
                'title' => $dummyComponents[$i]['title'],
                'description' => $dummyComponents[$i]['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        echo "Added $needed dummy components to: " . $page->slug . "\n";
    }
}
