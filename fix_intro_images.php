<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$artifactsDir = 'C:/Users/DELL/.gemini/antigravity-ide/brain/97c76468-b2ac-4633-9fd7-c413446f7524/';
$targetDir = 'C:/Users/DELL/Desktop/labortory/laravel/storage/app/public/service-intros/';

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
    echo "Created service-intros directory.\n";
}

// Map service intro images to existing artifact images
$imageMap = [
    'chemistry-intro.png' => 'comprehensive_metabolic_panel_hero_1789540014126.jpg',
    'hematology-intro.png' => 'complete_blood_count_cbc_hero_1789540822827.jpg',
    'immunoassay-intro.png' => 'thyroid_stimulating_hormone_about_1789544164817.jpg',
];

foreach ($imageMap as $destName => $sourceName) {
    $source = $artifactsDir . $sourceName;
    $dest = $targetDir . $destName;
    if (file_exists($source)) {
        copy($source, $dest);
        echo "Copied $sourceName -> $destName\n";
    } else {
        echo "Source not found: $sourceName\n";
    }
}

echo "\nDone! Intro images are now in place.\n";
