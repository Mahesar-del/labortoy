<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
$tests = Illuminate\Support\Facades\DB::table('tests')->where('service_id', 1)->get();
foreach($tests as $t) {
    echo "ID: $t->id, Name: $t->name, Active: $t->is_active\n";
}
