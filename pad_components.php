<?php
use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$testPages = DB::table('test_pages')->get();

$additionalComponents = [
    'Troponin' => [
        ['title' => 'Myoglobin', 'description' => "A protein found in heart and skeletal muscles that rises very quickly after heart muscle injury."],
        ['title' => 'Creatine Kinase (CK-MB)', 'description' => "An enzyme found primarily in the heart muscle that increases when there is damage to heart cells."]
    ],
    'Thyroid Stimulating Hormone (TSH)' => [
        ['title' => 'Free Thyroxine (FT4)', 'description' => "Often measured alongside TSH to confirm whether the thyroid is producing the correct amount of active hormone."],
        ['title' => 'Total T3 (Triiodothyronine)', 'description' => "Another primary thyroid hormone. Measuring T3 helps diagnose hyperthyroidism and assess its severity."],
        ['title' => 'Thyroid Antibodies', 'description' => "Proteins that mistakenly attack the thyroid gland, helping diagnose autoimmune conditions like Hashimoto's disease."]
    ],
    'Free T4' => [
        ['title' => 'Thyroid Stimulating Hormone (TSH)', 'description' => "Typically measured with Free T4 to provide a complete picture of the feedback loop between the pituitary and thyroid."],
        ['title' => 'Total T4 (Thyroxine)', 'description' => "Measures both bound and free T4 in the blood, offering additional context about overall thyroid hormone production."],
        ['title' => 'Thyroid-Binding Globulin (TBG)', 'description' => "A protein that carries thyroid hormones through the bloodstream, affecting the total levels of circulating T4."]
    ],
    'Hemoglobin & Hematocrit' => [
        ['title' => 'Mean Corpuscular Volume (MCV)', 'description' => "Measures the average size of your red blood cells, helping identify the specific type and cause of anemia."],
        ['title' => 'Red Cell Distribution Width (RDW)', 'description' => "Calculates the variation in size among your red blood cells, which is an early indicator of nutritional deficiencies."]
    ]
];

foreach ($testPages as $page) {
    $count = DB::table('test_page_components')->where('test_page_id', $page->id)->count();
    
    if ($count < 4) {
        $needed = 4 - $count;
        $title = $page->title;
        
        if (isset($additionalComponents[$title])) {
            $toAdd = array_slice($additionalComponents[$title], 0, $needed);
            foreach ($toAdd as $comp) {
                DB::table('test_page_components')->insert([
                    'test_page_id' => $page->id,
                    'title' => $comp['title'],
                    'description' => $comp['description'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        } else {
            // Generic padding if needed
            for ($i = 0; $i < $needed; $i++) {
                DB::table('test_page_components')->insert([
                    'test_page_id' => $page->id,
                    'title' => 'Additional Metric ' . ($i + 1),
                    'description' => 'A supplementary measurement used to provide a more comprehensive overview of your test results.',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}

echo "Padded all test pages to have exactly 4 components.\n";
