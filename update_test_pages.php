<?php

use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$updates = [
    'comprehensive-metabolic-panel' => [
        'bg_image' => 'test_pages/comprehensive-metabolic-panel-hero.jpg',
        'description' => 'A Comprehensive Metabolic Panel (CMP) is a blood test that measures 14 different substances in your blood. It provides crucial information about your body\'s chemical balance and metabolism, offering a broad view of your overall health, kidney, and liver function.',
        'quick_info_type' => 'Blood Test',
        'quick_info_specimen' => 'Serum',
        'quick_info_prep' => 'Fast for 10-12 hours prior to testing',
    ],
    'basic-metabolic-panel' => [
        'bg_image' => 'test_pages/basic-metabolic-panel-hero.jpg',
        'description' => 'A Basic Metabolic Panel (BMP) is a standard blood test that measures eight specific substances in your blood to evaluate your body\'s metabolism. This test helps assess kidney function, blood sugar levels, and electrolyte and acid/base balance.',
        'quick_info_type' => 'Blood Test',
        'quick_info_specimen' => 'Serum or Plasma',
        'quick_info_prep' => 'Usually fast for 10-12 hours prior to testing',
    ],
    'lipid-panel' => [
        'bg_image' => 'test_pages/lipid-panel-hero.jpg',
        'description' => 'A Lipid Panel is a crucial blood test used to monitor and screen for cardiovascular disease risks. It measures the amount of cholesterol and triglycerides in your blood, helping doctors determine your risk of plaque buildup in your arteries.',
        'quick_info_type' => 'Blood Test',
        'quick_info_specimen' => 'Serum',
        'quick_info_prep' => 'Fast for 9-12 hours prior to testing',
    ],
    'troponin' => [
        'bg_image' => 'test_pages/troponin-hero.jpg',
        'description' => 'The Troponin test measures the levels of troponin proteins in the blood. These proteins are released when the heart muscle has been damaged, making this test a critical tool in diagnosing a heart attack and evaluating other types of heart injury.',
        'quick_info_type' => 'Blood Test',
        'quick_info_specimen' => 'Serum or Plasma',
        'quick_info_prep' => 'No special preparation needed',
    ]
];

foreach ($updates as $slug => $data) {
    DB::table('test_pages')->where('slug', $slug)->update($data);
}

echo "Database updated successfully.\n";
