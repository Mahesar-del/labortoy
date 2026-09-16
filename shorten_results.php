<?php
use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$results = DB::table('test_page_results')->get();

$shortDescriptions = [
    'High Glucose' => "Abnormal glucose levels may indicate diabetes or hypoglycemia.",
    'Low Glucose' => "Abnormal glucose levels may indicate diabetes or hypoglycemia.",
    'Abnormal Kidney Function' => "Elevated BUN or creatinine suggests reduced kidney function.",
    'Abnormal Liver Enzymes' => "Abnormal liver enzymes indicate liver inflammation or damage.",
    'Abnormal Electrolytes' => "Imbalances in sodium or potassium affect nerve and muscle health.",
    'Elevated BUN or Creatinine' => "High levels indicate reduced kidney filtering efficiency.",
    'Elevated Glucose' => "High fasting glucose is a strong indicator of diabetes.",
    'High LDL' => "High 'bad' cholesterol increases the risk of heart disease.",
    'Low HDL' => "Low 'good' cholesterol offers less protection for your heart.",
    'High Triglycerides' => "Excess fats in the blood linked to cardiovascular risk.",
    'Normal Troponin' => "Indicates no significant recent damage to the heart muscle.",
    'Elevated Troponin' => "High levels strongly suggest a recent heart attack or injury.",
    'Rising Troponin Trend' => "Increasing levels confirm an active, ongoing heart attack.",
    'High TSH' => "Indicates an underactive thyroid (hypothyroidism) requiring attention.",
    'Low TSH' => "Indicates an overactive thyroid (hyperthyroidism) needing evaluation.",
    'Normal but Symptomatic' => "If symptoms persist, other thyroid factors may be investigated.",
    'High Free T4' => "Suggests an overactive thyroid gland (hyperthyroidism).",
    'Low Free T4' => "Suggests an underactive thyroid gland (hypothyroidism).",
    'Borderline Results' => "Minor deviations often require monitoring instead of immediate medication.",
    'Low RBC or Hemoglobin' => "Indicates anemia, reducing oxygen delivery to body tissues.",
    'High WBC Count' => "Usually signals an active infection or inflammation in the body.",
    'Low Platelet Count' => "Increases the risk of excessive bleeding and poor clotting.",
    'High Neutrophils' => "Typically indicates a rapid response to a bacterial infection.",
    'High Lymphocytes' => "Often elevated during acute viral infections like the flu.",
    'High Eosinophils' => "Commonly seen during allergic reactions or parasitic infections.",
    'Low H&H Levels' => "Indicates anemia caused by iron deficiency or blood loss.",
    'High H&H Levels' => "May indicate dehydration, lung disease, or polycythemia.",
    'Normal H&H Levels' => "Indicates healthy oxygen capacity and normal red blood cell count."
];

foreach ($results as $result) {
    if (isset($shortDescriptions[$result->title])) {
        DB::table('test_page_results')
            ->where('id', $result->id)
            ->update(['description' => $shortDescriptions[$result->title]]);
    } else {
        // Fallback: take just the first short sentence
        $parts = explode('.', $result->description);
        $desc = isset($parts[0]) ? $parts[0] . '.' : $result->description;
        DB::table('test_page_results')
            ->where('id', $result->id)
            ->update(['description' => substr($desc, 0, 100)]);
    }
}

echo "Result descriptions shortened successfully.\n";
