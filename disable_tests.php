<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
Illuminate\Support\Facades\DB::table('tests')->whereIn('name', ['Platelet Count', 'Reticulocyte Count', 'Peripheral Blood Smear'])->update(['is_active' => false]);
echo 'Updated';
