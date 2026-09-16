<?php
use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$testPages = DB::table('test_pages')->get();

$newResultsTexts = [
    'Comprehensive Metabolic Panel' => "Your CMP results provide a comprehensive snapshot of your body's chemical balance and metabolism. The report details the exact levels of 14 different substances. Your doctor will carefully review these numbers together, comparing them against standard healthy ranges to identify any underlying issues with your kidneys, liver, or blood sugar regulation.",
    'Basic Metabolic Panel' => "The BMP results offer crucial insights into your current metabolic state, focusing on your kidneys and electrolyte balance. Because these 8 substances are tightly regulated by your body, even minor deviations can be significant. Your healthcare provider will interpret these findings in the context of your symptoms and overall medical history.",
    'Lipid Panel' => "Interpreting your lipid panel involves looking at the balance between different types of cholesterol and triglycerides. These numbers are used to calculate your overall cardiovascular risk score. Your doctor will consider these results alongside other risk factors like your age, blood pressure, and family history to determine if lifestyle changes or medications are necessary.",
    'Troponin' => "Troponin levels are a critical diagnostic tool when a heart attack is suspected. Because troponin proteins are released into the bloodstream when the heart muscle is damaged, their presence and concentration are closely monitored. Usually, a series of tests is performed over several hours to observe if the levels are rising, peaking, or falling.",
    'Thyroid Stimulating Hormone (TSH)' => "TSH results are the primary indicator of how well your thyroid gland is functioning. It's important to understand that TSH operates on a negative feedback loop; a high TSH means your thyroid is underactive, while a low TSH means it's overactive. Your doctor will use these results to determine if thyroid hormone replacement or other treatments are needed.",
    'Free T4' => "Free T4 results provide a direct measurement of the active thyroid hormone available to your body's tissues. While TSH tells us what the brain is asking the thyroid to do, Free T4 tells us what the thyroid is actually doing. These results are typically evaluated alongside your TSH levels to diagnose specific thyroid disorders accurately.",
    'Complete Blood Count (CBC)' => "Your CBC results offer a broad overview of your general health by quantifying the different cells that make up your blood. Abnormalities in these counts can be the first sign of a wide variety of medical conditions, ranging from simple nutritional deficiencies to more complex issues like infections or blood disorders.",
    'CBC with Differential' => "The differential portion of your CBC provides a detailed breakdown of your immune system's white blood cells. By analyzing the percentages and absolute numbers of each specific cell type, your doctor can often determine the exact nature of an immune response, distinguishing between bacterial infections, viral illnesses, allergies, or other inflammatory conditions.",
    'Hemoglobin & Hematocrit' => "Hemoglobin and hematocrit levels generally rise and fall together, providing a dual assessment of your blood's oxygen-carrying capacity. These results are the most direct way to diagnose anemia or polycythemia. Your doctor will look at how far outside the normal range your numbers fall to determine the severity of the condition and the necessary next steps."
];

$thirdResults = [
    'Troponin' => ['title' => 'Rising Troponin Trend', 'description' => "If serial tests show troponin levels consistently increasing over several hours, it strongly suggests an active, ongoing myocardial infarction (heart attack)."],
    'Thyroid Stimulating Hormone (TSH)' => ['title' => 'Normal but Symptomatic', 'description' => "If your TSH is normal but you still experience thyroid symptoms, your doctor may investigate other factors like Free T3 levels or thyroid antibodies."],
    'Free T4' => ['title' => 'Borderline Results', 'description' => "Slight deviations in Free T4 might not require immediate medication but will often warrant regular monitoring to catch any developing thyroid issues early."],
    'Hemoglobin & Hematocrit' => ['title' => 'Normal H&H Levels', 'description' => "Indicates a healthy red blood cell count and adequate oxygen-carrying capacity, effectively ruling out significant anemia or blood loss."]
];

foreach ($testPages as $page) {
    $title = $page->title;

    // 1. Update the results_text paragraph
    if (isset($newResultsTexts[$title])) {
        DB::table('test_pages')
            ->where('id', $page->id)
            ->update(['results_text' => $newResultsTexts[$title]]);
    }

    // 2. Ensure exactly 3 results
    $resultCount = DB::table('test_page_results')->where('test_page_id', $page->id)->count();

    if ($resultCount == 2 && isset($thirdResults[$title])) {
        DB::table('test_page_results')->insert([
            'test_page_id' => $page->id,
            'title' => $thirdResults[$title]['title'],
            'description' => $thirdResults[$title]['description'],
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

echo "Results updated successfully.\n";
