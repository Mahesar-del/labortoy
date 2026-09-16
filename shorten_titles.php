<?php
use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$components = DB::table('test_page_components')->get();

$replacements = [
    'Sodium, Potassium, Carbon Dioxide, and Chloride' => 'Electrolytes',
    'BUN and Creatinine' => 'Kidney Markers',
    'Sodium and Potassium' => 'Sodium & Potassium',
    'Carbon Dioxide (Bicarbonate)' => 'Bicarbonate (CO2)',
    'Low-Density Lipoprotein (LDL)' => 'LDL Cholesterol',
    'High-Density Lipoprotein (HDL)' => 'HDL Cholesterol',
    'Cardiac Troponin I (cTnI)' => 'Troponin I (cTnI)',
    'Cardiac Troponin T (cTnT)' => 'Troponin T (cTnT)',
    'Creatine Kinase (CK-MB)' => 'CK-MB Enzyme',
    'Thyroid Stimulating Hormone (TSH)' => 'TSH Hormone',
    'Free Thyroxine (FT4)' => 'Free T4',
    'Total T3 (Triiodothyronine)' => 'Total T3',
    'Total T4 (Thyroxine)' => 'Total T4',
    'Thyroid-Binding Globulin (TBG)' => 'TBG Protein',
    'Red Blood Cells (RBC)' => 'Red Blood Cells',
    'White Blood Cells (WBC)' => 'White Blood Cells',
    'Hemoglobin (Hb)' => 'Hemoglobin',
    'Hemoglobin (Hb/Hgb)' => 'Hemoglobin',
    'Hematocrit (Hct)' => 'Hematocrit',
    'Mean Corpuscular Volume (MCV)' => 'MCV',
    'Red Cell Distribution Width (RDW)' => 'RDW'
];

foreach ($components as $comp) {
    if (isset($replacements[$comp->title])) {
        DB::table('test_page_components')
            ->where('id', $comp->id)
            ->update(['title' => $replacements[$comp->title]]);
    }
}

echo "Component titles shortened.\n";
