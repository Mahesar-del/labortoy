<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();
$services = \App\Models\Service::all();
foreach ($services as $service) {
    echo $service->name . " | intro_image: " . ($service->intro_image ?: 'NULL') . "\n";
}
