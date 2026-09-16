<?php
use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$components = DB::table('test_page_components')->get();

$newDescriptions = [
    'Glucose' => "The primary energy source for the body's cells. Monitoring glucose levels is crucial for diagnosing and managing diabetes, prediabetes, and hypoglycemia, ensuring your body is processing sugars correctly for optimal daily energy.",
    'Calcium' => "Essential for proper functioning of your muscles, nerves, and heart. It also plays a vital role in bone formation and blood clotting. Abnormal calcium levels can indicate bone disease, thyroid issues, or kidney problems.",
    'Sodium, Potassium, Carbon Dioxide, and Chloride' => "Critical electrolytes that help maintain your body's fluid balance and ensure proper nerve and muscle function. Imbalances in these minerals can lead to dehydration, hypertension, or significant cardiac and muscular issues.",
    'BUN and Creatinine' => "These are waste products normally filtered out of the blood by the kidneys. Elevated levels of these markers often provide the first indication that your kidneys are not functioning efficiently or are experiencing stress.",
    'Sodium and Potassium' => "Critical electrolytes that help maintain your body's fluid balance and ensure proper nerve and muscle function. Imbalances in these minerals can lead to dehydration, hypertension, or significant cardiac and muscular issues.",
    'Carbon Dioxide (Bicarbonate)' => "This component helps maintain the body's acid-base (pH) balance. It works closely with other electrolytes to ensure that your blood doesn't become too acidic or too alkaline, which is vital for normal cellular function.",
    'Total Cholesterol' => "This measures the overall amount of cholesterol circulating in your bloodstream. While your body needs some cholesterol to build healthy cells, high levels can increase your risk of developing heart disease and restricted blood flow.",
    'Low-Density Lipoprotein (LDL)' => "Often referred to as the 'bad' cholesterol because it contributes to fatty buildups in arteries. High LDL levels increase the risk of atherosclerosis, which can eventually lead to heart attacks and strokes.",
    'High-Density Lipoprotein (HDL)' => "Known as the 'good' cholesterol because it acts as a scavenger, carrying LDL cholesterol away from the arteries and back to the liver. Higher levels of HDL are associated with a lower risk of heart disease.",
    'Triglycerides' => "A type of fat found in your blood that stores excess energy from your diet. High levels of triglycerides, especially combined with high LDL or low HDL, can significantly increase the risk of heart disease and stroke.",
    'Cardiac Troponin I (cTnI)' => "A highly sensitive and specific marker for heart muscle damage. Elevated levels in the blood are a primary indicator of myocardial injury, commonly used in emergency settings to diagnose heart attacks rapidly.",
    'Cardiac Troponin T (cTnT)' => "A protein integral to cardiac muscle contraction. Like Troponin I, its presence in the bloodstream strongly indicates damage to the heart muscle, helping doctors assess the severity of a cardiac event.",
    'Thyroid Stimulating Hormone (TSH)' => "Produced by the pituitary gland, TSH regulates how much hormone the thyroid gland releases. It acts as the primary screening marker to identify an underactive (hypothyroidism) or overactive (hyperthyroidism) thyroid.",
    'Free Thyroxine (FT4)' => "This is the active, unbound portion of the main thyroid hormone circulating in your blood. It directly influences metabolic rate, and measuring it provides a highly accurate reflection of your actual thyroid function.",
    'Red Blood Cells (RBC)' => "These are the essential cells responsible for carrying oxygen from your lungs to every tissue in your body. A low count can indicate anemia, leading to fatigue, while a high count may suggest dehydration or other conditions.",
    'White Blood Cells (WBC)' => "The primary defense mechanism of your immune system, these cells fight off infections and diseases. An elevated count often signals an active infection, inflammation, or an immune system disorder requiring attention.",
    'Platelets' => "Tiny cell fragments that play a crucial role in blood clotting and wound healing. A low platelet count can result in excessive bleeding or bruising, while too many can lead to dangerous blood clots.",
    'Hemoglobin (Hb)' => "This is the iron-rich protein inside red blood cells that binds to oxygen. Measuring hemoglobin levels is the most common way to diagnose anemia and assess your blood's overall oxygen-carrying capacity.",
    'Neutrophils' => "The most abundant type of white blood cell, acting as the first responders to microbial infections. High levels are typically a strong indicator of an acute bacterial infection or significant bodily inflammation.",
    'Lymphocytes' => "Vital components of the immune system that include T cells and B cells. They are primarily responsible for fighting off viral infections and producing antibodies to protect against future illnesses.",
    'Monocytes' => "The largest type of white blood cell, these act as scavengers that break down bacteria and cellular debris. They play a long-term role in immunity and clearing away dead cells from the body.",
    'Eosinophils' => "These white blood cells are highly active during allergic reactions and are also responsible for combating parasitic infections. Elevated levels are often seen in patients with asthma or severe allergies.",
    'Hemoglobin (Hb/Hgb)' => "This is the iron-rich protein inside red blood cells that binds to oxygen. Measuring hemoglobin levels is the most common way to diagnose anemia and assess your blood's overall oxygen-carrying capacity.",
    'Hematocrit (Hct)' => "This measures the volume percentage of red blood cells in your entire blood makeup. It is a critical metric used alongside hemoglobin to diagnose conditions like anemia, dehydration, or nutritional deficiencies."
];

foreach ($components as $comp) {
    if (isset($newDescriptions[$comp->title])) {
        DB::table('test_page_components')
            ->where('id', $comp->id)
            ->update(['description' => $newDescriptions[$comp->title]]);
    } else {
        // Fallback for any missed component to just make it longer artificially
        $desc = $comp->description . " This specific metric provides critical insights into your overall health status, allowing physicians to make more informed diagnostic and treatment decisions.";
        DB::table('test_page_components')
            ->where('id', $comp->id)
            ->update(['description' => $desc]);
    }
}

echo "Component descriptions expanded.\n";
