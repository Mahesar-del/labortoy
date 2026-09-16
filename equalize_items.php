<?php
use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$testPages = DB::table('test_pages')->get();

$specimenItems = implode("\n", [
    "Blood drawn from an arm vein.",
    "Procedure takes only a few minutes.",
    "A small pinch may be felt.",
    "Collected in vacuum-sealed tubes.",
    "Pressure applied to prevent bleeding.",
    "Sent securely to the laboratory."
]);

$preparationItems = implode("\n", [
    "Fasting may be required (8-12 hours).",
    "Drink water to stay well-hydrated.",
    "Continue taking regular medications.",
    "Wear a short-sleeved shirt.",
    "Arrive early for clinic paperwork.",
    "Tell staff if you ever faint."
]);

foreach ($testPages as $page) {
    DB::table('test_pages')
        ->where('id', $page->id)
        ->update([
            'specimen_items' => $specimenItems,
            'preparation_items' => $preparationItems
        ]);
}

echo "Updated items to be concise and equal length.\n";
