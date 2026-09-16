<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
$services = \App\Models\Service::all();
foreach ($services as $service) {
    echo $service->name . " | Hero Image: " . ($service->hero_image ?: 'None') . "\n";
}
