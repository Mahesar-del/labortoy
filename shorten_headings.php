<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$replacements = [
    'Sodium, Potassium, Carbon Dioxide, and Chloride' => 'Electrolytes',
    'BUN and Creatinine' => 'Kidney Markers',
    'ALP, ALT, AST, and Bilirubin' => 'Liver Enzymes',
    'Total Protein and Albumin' => 'Blood Proteins',
    'Sodium and Potassium' => 'Electrolytes',
    'Carbon Dioxide (Bicarbonate)' => 'Bicarbonate',
    'BUN (Blood Urea Nitrogen)' => 'BUN Level',
    'Total Cholesterol' => 'Cholesterol',
    'Low-Density Lipoprotein (LDL)' => 'LDL (Bad)',
    'High-Density Lipoprotein (HDL)' => 'HDL (Good)',
    'Very Low-Density Lipoprotein (VLDL)' => 'VLDL Level',
    'Cardiac Troponin I (cTnI)' => 'Troponin I',
    'Cardiac Troponin T (cTnT)' => 'Troponin T',
    'Thyroid Stimulating Hormone (TSH)' => 'TSH Level',
    'Free Thyroxine (FT4)' => 'Free T4',
    'Red Blood Cells (RBC)' => 'RBC Count',
    'White Blood Cells (WBC)' => 'WBC Count',
    'Hematocrit (Hct)' => 'Hematocrit',
    'Hemoglobin (Hb/Hgb)' => 'Hemoglobin',
    'Clinical Significance' => 'Significance',
    'Diagnostic Accuracy' => 'Accuracy',
    'Patient Monitoring' => 'Monitoring',
    'Preventative Health' => 'Prevention'
];

foreach ($replacements as $old => $new) {
    $affected = \Illuminate\Support\Facades\DB::table('test_page_components')
        ->where('title', $old)
        ->update(['title' => $new]);
    
    if ($affected > 0) {
        echo "Updated: '$old' -> '$new' ($affected rows)\n";
    }
}
