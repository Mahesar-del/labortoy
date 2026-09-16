<?php
use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$testPages = DB::table('test_pages')->get();

$specimenItems = implode("\n", [
    "Drawn from a vein in your arm by a qualified phlebotomist.",
    "The procedure is quick and takes only a few minutes.",
    "A minor pinch may be felt when the needle is inserted.",
    "The blood is collected into sterile, vacuum-sealed tubes.",
    "Pressure and a bandage are applied afterward to prevent bleeding.",
    "The specimen is carefully labeled and immediately sent to the lab."
]);

$preparationItems = implode("\n", [
    "Fasting for 8-12 hours may be required depending on your doctor's orders.",
    "Drink plenty of water beforehand to ensure you are well-hydrated.",
    "Continue taking your regular medications unless instructed otherwise.",
    "Wear a short-sleeved or loose-fitting shirt for easy access to your arm.",
    "Arrive 10-15 minutes early to complete any necessary clinic paperwork.",
    "Inform the medical staff if you have a history of fainting during blood draws."
]);

foreach ($testPages as $page) {
    DB::table('test_pages')
        ->where('id', $page->id)
        ->update([
            'specimen_items' => $specimenItems,
            'preparation_items' => $preparationItems
        ]);
}

echo "Fixed formatting and updated to 6 identical points.\n";
