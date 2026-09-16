<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$artifactsDir = 'C:/Users/DELL/.gemini/antigravity-ide/brain/97c76468-b2ac-4633-9fd7-c413446f7524/';
$publicServicesDir = 'C:/Users/DELL/Desktop/labortory/laravel/storage/app/public/services/';

if (!is_dir($publicServicesDir)) {
    mkdir($publicServicesDir, 0755, true);
}

// Map services to existing artifact hero images since we hit a generation rate limit
$imageMap = [
    'Chemistry Testing' => 'comprehensive_metabolic_panel_hero_1789540014126.jpg',
    'Hematology' => 'complete_blood_count_cbc_hero_1789540822827.jpg',
    'Immunoassay Testing' => 'free_t4_hero_1789540811500.jpg'
];

$services = \App\Models\Service::all();
foreach ($services as $service) {
    if (isset($imageMap[$service->name])) {
        $sourceFile = $artifactsDir . $imageMap[$service->name];
        $destFilename = 'service_hero_' . time() . '_' . $service->id . '.jpg';
        $destPath = $publicServicesDir . $destFilename;
        
        if (file_exists($sourceFile)) {
            copy($sourceFile, $destPath);
            $service->hero_image = 'services/' . $destFilename;
            $service->save();
            echo "Updated " . $service->name . " with image " . $destFilename . "\n";
        } else {
            echo "Source image not found for " . $service->name . "\n";
        }
    }
}
