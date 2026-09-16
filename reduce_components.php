<?php
use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$components = DB::table('test_page_components')->get();

$newDescriptions = [
    'Glucose' => "The primary energy source for your body's cells. Monitoring it is crucial for diabetes.",
    'Calcium' => "Essential for healthy bones, muscle contraction, and proper nerve signaling.",
    'Sodium, Potassium, Carbon Dioxide, and Chloride' => "Critical electrolytes that help maintain fluid balance and proper muscle function.",
    'BUN and Creatinine' => "Waste products that indicate how efficiently your kidneys are functioning.",
    'Sodium and Potassium' => "Critical electrolytes that help maintain your body's fluid balance and muscle function.",
    'Carbon Dioxide (Bicarbonate)' => "Helps maintain the body's acid-base balance for normal cellular function.",
    'Chloride' => "An electrolyte that works with sodium to maintain healthy fluid balance.",
    'Total Cholesterol' => "Measures the overall amount of cholesterol circulating in your bloodstream.",
    'Low-Density Lipoprotein (LDL)' => "Known as 'bad' cholesterol, which contributes to fatty buildups in arteries.",
    'High-Density Lipoprotein (HDL)' => "The 'good' cholesterol that carries LDL away from the arteries.",
    'Triglycerides' => "A type of fat in your blood that stores excess energy from your diet.",
    'Cardiac Troponin I (cTnI)' => "A highly specific marker that elevates when there is damage to the heart muscle.",
    'Cardiac Troponin T (cTnT)' => "A protein indicating heart muscle damage, used to assess cardiac events.",
    'Thyroid Stimulating Hormone (TSH)' => "Regulates thyroid hormones. It screens for underactive or overactive thyroid conditions.",
    'Free Thyroxine (FT4)' => "The active thyroid hormone in your blood that directly influences metabolism.",
    'Red Blood Cells (RBC)' => "Essential cells that carry oxygen from your lungs to the rest of your body.",
    'White Blood Cells (WBC)' => "Your immune system's primary defense for fighting off infections and diseases.",
    'Platelets' => "Tiny cell fragments that play a crucial role in blood clotting and wound healing.",
    'Hemoglobin (Hb)' => "The oxygen-carrying protein in red blood cells, used to diagnose anemia.",
    'Hemoglobin (Hb/Hgb)' => "The oxygen-carrying protein in red blood cells, used to diagnose anemia.",
    'Hematocrit (Hct)' => "Measures the volume percentage of red blood cells in your entire blood makeup.",
    'Neutrophils' => "The most abundant white blood cell, acting as first responders to infections.",
    'Lymphocytes' => "Vital immune cells primarily responsible for fighting off viral infections.",
    'Monocytes' => "Large white blood cells that break down bacteria and cellular debris.",
    'Eosinophils' => "White blood cells that combat parasitic infections and allergic reactions."
];

foreach ($components as $comp) {
    if (isset($newDescriptions[$comp->title])) {
        DB::table('test_page_components')
            ->where('id', $comp->id)
            ->update(['description' => $newDescriptions[$comp->title]]);
    } else {
        // Fallback for any missed component
        $parts = explode('.', $comp->description);
        $desc = isset($parts[0]) ? $parts[0] . '.' : $comp->description;
        DB::table('test_page_components')
            ->where('id', $comp->id)
            ->update(['description' => $desc]);
    }
}

echo "Component descriptions reduced.\n";
