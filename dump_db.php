<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Add Comprehensive Metabolic Panel test
$exists = Illuminate\Support\Facades\DB::table('tests')->where('name', 'Comprehensive Metabolic Panel')->first();

if (!$exists) {
    Illuminate\Support\Facades\DB::table('tests')->insert([
        'service_id' => 1,
        'name' => 'Comprehensive Metabolic Panel',
        'heading' => 'Comprehensive Metabolic Panel',
        'description' => 'Measures key substances in the blood to assess metabolism, liver, kidney, and overall health.',
        'image_path' => null, // The view will fallback to TestPage bg_image
        'is_active' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    echo "Inserted Test.\n";
} else {
    echo "Test already exists.\n";
}

$tp = App\Models\TestPage::where('title', 'Comprehensive Metabolic Panel')->first();
if($tp) {
    echo $tp->title . ' - bg: ' . $tp->bg_image . "\n";
} else {
    echo "Not found in test_pages\n";
}
