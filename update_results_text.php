<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$pages = \App\Models\TestPage::all();
foreach($pages as $page) {
    if (strlen($page->results_text) < 150) {
        echo $page->slug . "\nOld: " . $page->results_text . "\n";
        // Expand the text based on the test
        $newText = $page->results_text;
        
        switch($page->slug) {
            case 'free-t4':
                $newText = "Free T4 results are almost always interpreted in conjunction with TSH results. By evaluating both hormones together, your healthcare provider can accurately diagnose whether you have an overactive thyroid (hyperthyroidism), an underactive thyroid (hypothyroidism), or if your thyroid function is completely normal. Keep in mind that certain medications and medical conditions can also temporarily affect these levels, so a comprehensive clinical evaluation is essential.";
                break;
            case 'thyroid-stimulating-hormone-tsh':
                $newText = "TSH levels have an inverse relationship with thyroid hormone levels. When your thyroid gland is not producing enough hormones, your pituitary gland releases more TSH to stimulate it. Conversely, if your thyroid is overactive, TSH production drops. Your doctor will use these results to evaluate your thyroid health, monitor ongoing treatments, and determine if any adjustments to your medication or lifestyle are necessary.";
                break;
            case 'troponin':
                $newText = "Even a slight increase in troponin levels can indicate some damage to the heart muscle. Because troponin is highly specific to cardiac tissue, elevated levels are a critical marker used by emergency room doctors to diagnose a heart attack (myocardial infarction). Serial testing over several hours helps track the pattern of troponin release, ensuring an accurate and timely diagnosis for optimal patient care and recovery.";
                break;
            case 'hemoglobin-hematocrit':
                $newText = "Hemoglobin and hematocrit levels generally rise and fall together. These two measurements are the gold standard for diagnosing anemia, a condition where your blood lacks enough healthy red blood cells to carry adequate oxygen to your body's tissues. Depending on whether your results are high or low, your healthcare provider can pinpoint underlying causes such as iron deficiency, chronic illness, blood loss, or dehydration, and recommend an appropriate treatment plan.";
                break;
            case 'basic-metabolic-panel':
                $newText = "BMP results help diagnose a wide range of conditions, from dehydration to kidney failure. By measuring your blood sugar, kidney function, and electrolyte levels, this panel gives your healthcare provider a clear snapshot of your metabolism and chemical balance. Abnormal results can point to acute issues that need immediate medical attention or help track the progression of chronic diseases over time.";
                break;
            case 'lipid-panel':
                $newText = "Your lipid panel results are used to calculate your risk of cardiovascular disease. This includes assessing your levels of 'good' HDL cholesterol, 'bad' LDL cholesterol, and triglycerides. By understanding your complete lipid profile, your doctor can determine your risk for heart attacks and strokes, and recommend targeted lifestyle changes, dietary adjustments, or cholesterol-lowering medications to keep your heart healthy.";
                break;
            case 'complete-blood-count-cbc':
                $newText = "Abnormal levels in a CBC can indicate various health issues. Since this test evaluates your red blood cells, white blood cells, and platelets, it provides a comprehensive overview of your overall health. Your doctor uses these results to screen for anemia, detect underlying infections, monitor ongoing medical treatments, and identify blood disorders or immune system deficiencies.";
                break;
            case 'cbc-with-differential':
                $newText = "The differential results show the percentage (and absolute number) of each white blood cell type. By breaking down your white blood cells into five specific categories, your healthcare provider can identify the exact nature of an immune response. This detailed information is crucial for distinguishing between bacterial infections, viral illnesses, allergic reactions, and more complex inflammatory or autoimmune conditions.";
                break;
            case 'comprehensive-metabolic-panel':
                $newText = "Your results will show the levels of each of the 14 substances. Your doctor will interpret these in the context of your overall health. A CMP provides a broad look at how well your kidneys and liver are functioning, checks your blood sugar levels, and evaluates your electrolyte and fluid balance. Minor fluctuations are common, but significant abnormalities can help diagnose diabetes, kidney disease, liver damage, and other metabolic conditions.";
                break;
        }
        
        $page->results_text = $newText;
        $page->save();
        echo "New: " . $newText . "\n\n";
    }
}
