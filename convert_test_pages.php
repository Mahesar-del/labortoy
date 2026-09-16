<?php

use Illuminate\Support\Facades\DB;
use App\Models\TestPage;
use Illuminate\Support\Str;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$tests_to_convert = [
    7 => [ // Thyroid Stimulating Hormone (TSH)
        'bg_image' => 'test_pages/thyroid-stimulating-hormone-hero.jpg',
        'description' => 'The TSH (Thyroid Stimulating Hormone) test is a blood test used to check for thyroid gland problems. It measures how much TSH is in your blood, which helps determine if your thyroid is overactive (hyperthyroidism) or underactive (hypothyroidism).',
        'quick_info_type' => 'Blood Test',
        'quick_info_specimen' => 'Serum',
        'quick_info_prep' => 'No special preparation needed',
    ],
    8 => [ // Free T4
        'bg_image' => 'test_pages/free-t4-hero.jpg',
        'description' => 'A Free T4 test measures the level of free thyroxine (T4) in your blood. T4 is a hormone produced by the thyroid gland that plays a crucial role in regulating your body\'s metabolism, heart rate, and temperature.',
        'quick_info_type' => 'Blood Test',
        'quick_info_specimen' => 'Serum',
        'quick_info_prep' => 'No special preparation needed',
    ],
    13 => [ // Complete Blood Count (CBC)
        'bg_image' => 'test_pages/complete-blood-count-cbc-hero.jpg',
        'description' => 'A Complete Blood Count (CBC) is a common blood test used to evaluate your overall health and detect a wide range of disorders, including anemia, infection and leukemia. It measures several components of your blood, including red blood cells, white blood cells, and platelets.',
        'quick_info_type' => 'Blood Test',
        'quick_info_specimen' => 'Whole Blood',
        'quick_info_prep' => 'Usually no special preparation',
    ],
    14 => [ // CBC with Differential
        'bg_image' => 'test_pages/cbc-with-differential-hero.jpg',
        'description' => 'A CBC with Differential measures the number of each type of white blood cell in your blood. It is used to help diagnose and monitor many different conditions, including infections, autoimmune diseases, and leukemia.',
        'quick_info_type' => 'Blood Test',
        'quick_info_specimen' => 'Whole Blood',
        'quick_info_prep' => 'Usually no special preparation',
    ],
    15 => [ // Hemoglobin & Hematocrit
        'bg_image' => 'test_pages/hemoglobin-hematocrit-hero.jpg',
        'description' => 'Hemoglobin and Hematocrit (H&H) tests are often performed together to check for anemia. Hemoglobin measures the oxygen-carrying protein in red blood cells, while hematocrit measures the proportion of red blood cells in your blood.',
        'quick_info_type' => 'Blood Test',
        'quick_info_specimen' => 'Whole Blood',
        'quick_info_prep' => 'No special preparation needed',
    ]
];

foreach ($tests_to_convert as $test_id => $data) {
    $basic = DB::table('tests')->where('id', $test_id)->first();
    if (!$basic) continue;

    // Check if test page already exists
    $existing = TestPage::where('title', $basic->name)->where('service_id', $basic->service_id)->first();
    
    if (!$existing) {
        $existing = TestPage::create([
            'service_id' => $basic->service_id,
            'title' => $basic->name,
            'slug' => Str::slug($basic->name),
            'description' => $basic->description ?? $data['description'], // Prefer basic description if exists
            'status' => 'published',
        ]);
        echo "Created Test Page for: " . $basic->name . "\n";
    }

    // Update with new data
    $existing->update([
        'bg_image' => $data['bg_image'],
        'description' => $data['description'],
        'quick_info_type' => $data['quick_info_type'],
        'quick_info_specimen' => $data['quick_info_specimen'],
        'quick_info_prep' => $data['quick_info_prep'],
        'status' => 'published', // Ensure it is published
    ]);
    
    echo "Updated data for: " . $basic->name . "\n";
}

echo "Database updated successfully.\n";
