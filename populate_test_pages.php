<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$testData = [
    1 => [
        'title' => 'Comprehensive Metabolic Panel',
        'about_image' => 'test_pages/comprehensive-metabolic-panel-about.jpg',
        'about_heading' => 'What is a Comprehensive Metabolic Panel (CMP)?',
        'about_text' => 'The Comprehensive Metabolic Panel (CMP) is a blood test that measures 14 different substances in your blood. It provides important information about your body\'s chemical balance and metabolism. This includes checking your kidney and liver function, blood sugar levels, and electrolyte and fluid balance.',
        'components_heading' => 'What Does a CMP Measure?',
        'components_text' => 'The CMP measures 14 specific components to give a broad picture of your health.',
        'components' => [
            ['title' => 'Glucose', 'description' => 'A type of sugar and your body\'s main source of energy.'],
            ['title' => 'Calcium', 'description' => 'Essential for proper functioning of your muscles, nerves, and heart.'],
            ['title' => 'Sodium, Potassium, Carbon Dioxide, and Chloride', 'description' => 'These are electrolytes that help maintain fluid balance and acid-base balance.'],
            ['title' => 'BUN and Creatinine', 'description' => 'Waste products filtered out of the blood by the kidneys. These indicate how well the kidneys are working.'],
            ['title' => 'ALP, ALT, AST, and Bilirubin', 'description' => 'Enzymes and waste products found primarily in the liver. These indicate how well the liver is functioning.'],
            ['title' => 'Total Protein and Albumin', 'description' => 'Proteins in the blood that are important for healthy blood vessels and immune function.']
        ],
        'specimen_title' => 'What Sample is Needed?',
        'specimen_description' => 'A blood sample is required for a CMP.',
        'specimen_items' => "Blood drawn from a vein in your arm.\nUsually performed in a clinic or laboratory.",
        'preparation_title' => 'How Should You Prepare?',
        'preparation_description' => 'Fasting is typically required before a CMP.',
        'preparation_items' => "Do not eat or drink anything (except water) for 10-12 hours before the test.\nContinue taking your regular medications unless instructed otherwise by your doctor.",
        'results_heading' => 'Understanding Your CMP Results',
        'results_text' => 'Your results will show the levels of each of the 14 substances. Your doctor will interpret these in the context of your overall health.',
        'results' => [
            ['title' => 'High or Low Glucose', 'description' => 'May indicate diabetes, prediabetes, or hypoglycemia.'],
            ['title' => 'Abnormal Kidney Markers (BUN/Creatinine)', 'description' => 'Could suggest kidney disease or dehydration.'],
            ['title' => 'Abnormal Liver Markers (ALT/AST/ALP)', 'description' => 'May indicate liver damage, inflammation, or bile duct issues.']
        ],
        'faq_heading' => 'Frequently Asked Questions about CMP',
        'faq_description' => 'Common questions regarding the Comprehensive Metabolic Panel.',
        'faqs' => [
            ['question' => 'How often should I get a CMP?', 'answer' => 'A CMP is often ordered as part of an annual physical exam, but your doctor may order it more frequently if you have a chronic condition like diabetes or kidney disease.'],
            ['question' => 'Is a CMP the same as a BMP?', 'answer' => 'No. A Basic Metabolic Panel (BMP) measures 8 substances. A CMP includes all the tests in a BMP, plus 6 additional tests to evaluate liver function.']
        ]
    ],
    2 => [
        'title' => 'Basic Metabolic Panel',
        'about_image' => 'test_pages/basic-metabolic-panel-about.jpg',
        'about_heading' => 'What is a Basic Metabolic Panel (BMP)?',
        'about_text' => 'The Basic Metabolic Panel (BMP) is a frequently ordered blood test that provides important information about your metabolism. It measures 8 key substances in your blood to evaluate your kidney function, blood sugar levels, and electrolyte balance. It is an essential tool for monitoring acute and chronic health conditions.',
        'components_heading' => 'What Does a BMP Measure?',
        'components_text' => 'The BMP includes 8 distinct measurements.',
        'components' => [
            ['title' => 'Glucose', 'description' => 'The primary energy source for the body\'s cells.'],
            ['title' => 'Calcium', 'description' => 'Crucial for bone health, muscle contraction, and nerve signaling.'],
            ['title' => 'Sodium and Potassium', 'description' => 'Electrolytes critical for fluid balance and cellular function.'],
            ['title' => 'Carbon Dioxide (Bicarbonate)', 'description' => 'Helps maintain the body\'s pH (acid-base) balance.'],
            ['title' => 'Chloride', 'description' => 'An electrolyte that works with sodium to maintain fluid balance.'],
            ['title' => 'BUN (Blood Urea Nitrogen)', 'description' => 'A waste product from protein breakdown, used to check kidney function.'],
            ['title' => 'Creatinine', 'description' => 'A waste product from muscle breakdown, an important indicator of kidney health.']
        ],
        'specimen_title' => 'What Sample is Needed?',
        'specimen_description' => 'A standard blood draw is required.',
        'specimen_items' => "Venous blood sample.\nCollected by a phlebotomist.",
        'preparation_title' => 'How Should You Prepare?',
        'preparation_description' => 'Your doctor will tell you if you need to fast.',
        'preparation_items' => "Fasting (no food or drink except water) for 8 to 12 hours may be required.\nIf ordered without fasting, you can eat and drink normally.",
        'results_heading' => 'Understanding Your BMP Results',
        'results_text' => 'BMP results help diagnose a wide range of conditions, from dehydration to kidney failure.',
        'results' => [
            ['title' => 'Abnormal Electrolytes', 'description' => 'Can be caused by dehydration, kidney disease, or certain medications.'],
            ['title' => 'Elevated BUN or Creatinine', 'description' => 'Often the first sign that the kidneys are not filtering waste properly.'],
            ['title' => 'Elevated Glucose', 'description' => 'May indicate impaired glucose tolerance or diabetes.']
        ],
        'faq_heading' => 'BMP Frequently Asked Questions',
        'faq_description' => 'Learn more about the Basic Metabolic Panel.',
        'faqs' => [
            ['question' => 'Why did my doctor order a BMP instead of a CMP?', 'answer' => 'If your doctor only needs to check your kidney function, electrolytes, and blood sugar, a BMP is sufficient. A CMP is used when liver function also needs to be evaluated.'],
            ['question' => 'Can medications affect my BMP results?', 'answer' => 'Yes, many medications (like diuretics or blood pressure pills) can affect electrolyte levels. Always inform your doctor about all medications you are taking.']
        ]
    ],
    3 => [
        'title' => 'Lipid Panel',
        'about_image' => 'test_pages/lipid-panel-about.jpg',
        'about_heading' => 'What is a Lipid Panel?',
        'about_text' => 'A lipid panel is a blood test that measures the amount of certain fat molecules called lipids in your blood. In most cases, the panel includes four different cholesterol measurements and a measurement of your triglycerides. Having too many lipids in your blood can lead to buildup in your blood vessels and arteries, which can cause cardiovascular diseases.',
        'components_heading' => 'What Does a Lipid Panel Measure?',
        'components_text' => 'The lipid panel typically measures five key components.',
        'components' => [
            ['title' => 'Total Cholesterol', 'description' => 'The overall amount of cholesterol in your blood.'],
            ['title' => 'Low-Density Lipoprotein (LDL)', 'description' => 'Known as "bad" cholesterol. High levels lead to plaque buildup in arteries.'],
            ['title' => 'High-Density Lipoprotein (HDL)', 'description' => 'Known as "good" cholesterol. It helps carry LDL cholesterol away from the arteries.'],
            ['title' => 'Triglycerides', 'description' => 'A type of fat from the food you eat. Excess calories, alcohol, or sugar are converted into triglycerides and stored in fat cells.'],
            ['title' => 'Very Low-Density Lipoprotein (VLDL)', 'description' => 'Usually calculated rather than directly measured. VLDL also contributes to plaque buildup.']
        ],
        'specimen_title' => 'Sample Requirements',
        'specimen_description' => 'A standard venous blood sample.',
        'specimen_items' => "Drawn from a vein in the arm.\nQuick and relatively painless.",
        'preparation_title' => 'Test Preparation',
        'preparation_description' => 'Fasting is traditionally required, though non-fasting lipid panels are becoming more common.',
        'preparation_items' => "Usually requires fasting for 9 to 12 hours before the blood draw.\nWater is permitted.\nConsult your physician on whether fasting is required for your specific case.",
        'results_heading' => 'What Do The Results Mean?',
        'results_text' => 'Your lipid panel results are used to calculate your risk of cardiovascular disease.',
        'results' => [
            ['title' => 'High LDL', 'description' => 'Increases your risk of heart disease and stroke.'],
            ['title' => 'Low HDL', 'description' => 'Also increases your risk of heart disease. Higher HDL levels are protective.'],
            ['title' => 'High Triglycerides', 'description' => 'Associated with metabolic syndrome, fatty liver disease, and increased cardiovascular risk.']
        ],
        'faq_heading' => 'Lipid Panel FAQs',
        'faq_description' => 'Common questions about cholesterol testing.',
        'faqs' => [
            ['question' => 'At what age should I start getting a lipid panel?', 'answer' => 'The American Heart Association recommends that all adults aged 20 or older have their cholesterol checked every 4 to 6 years. Those with cardiovascular disease risk factors may need more frequent testing.'],
            ['question' => 'How can I improve my lipid panel results?', 'answer' => 'Lifestyle changes such as eating a heart-healthy diet, exercising regularly, losing weight, and quitting smoking can significantly improve your lipid profile.']
        ]
    ],
    4 => [
        'title' => 'Troponin',
        'about_image' => 'test_pages/troponin-about.jpg',
        'about_heading' => 'What is a Troponin Test?',
        'about_text' => 'A troponin test measures the levels of troponin T or troponin I proteins in the blood. These proteins are released when the heart muscle has been damaged, such as occurs with a heart attack. The more damage there is to the heart, the greater the amount of troponin T and I there will be in the blood.',
        'components_heading' => 'What Does it Measure?',
        'components_text' => 'The test specifically looks for cardiac-specific troponins.',
        'components' => [
            ['title' => 'Cardiac Troponin I (cTnI)', 'description' => 'Highly specific to the heart muscle. Elevated levels indicate myocardial injury.'],
            ['title' => 'Cardiac Troponin T (cTnT)', 'description' => 'Also specific to the heart muscle. Used similarly to cTnI to detect heart damage.']
        ],
        'specimen_title' => 'Specimen Collection',
        'specimen_description' => 'A venous blood sample is required.',
        'specimen_items' => "Blood drawn from a vein.\nOften drawn in an emergency setting.\nSerial testing (multiple draws over several hours) is standard practice.",
        'preparation_title' => 'Preparation',
        'preparation_description' => 'No special preparation is needed.',
        'preparation_items' => "No fasting is required.\nThis test is often performed in emergency situations where preparation is not possible.",
        'results_heading' => 'Interpreting Troponin Levels',
        'results_text' => 'Even a slight increase in troponin levels can indicate some damage to the heart.',
        'results' => [
            ['title' => 'Normal (Negative) Results', 'description' => 'Suggests that your symptoms are not caused by a heart attack.'],
            ['title' => 'Elevated (Positive) Results', 'description' => 'Indicates damage to the heart muscle. If the levels rise and fall over a series of tests, it is highly indicative of a heart attack.']
        ],
        'faq_heading' => 'Troponin Test FAQs',
        'faq_description' => 'Questions about troponin testing.',
        'faqs' => [
            ['question' => 'Why are multiple troponin tests done?', 'answer' => 'Troponin levels can take several hours to rise after a heart attack begins. Performing the test multiple times over 6 to 12 hours ensures that a delayed rise in troponin is not missed.'],
            ['question' => 'Can anything besides a heart attack cause high troponin?', 'answer' => 'Yes, other conditions that strain the heart can elevate troponin, including pulmonary embolism, congestive heart failure, and severe infections.']
        ]
    ],
    5 => [
        'title' => 'Thyroid Stimulating Hormone (TSH)',
        'about_image' => 'test_pages/thyroid_stimulating_hormone_about.jpg',
        'about_heading' => 'What is a TSH Test?',
        'about_text' => 'A TSH (Thyroid Stimulating Hormone) test is a blood test that measures the amount of TSH in your blood. TSH is produced by the pituitary gland and tells the thyroid gland to make and release thyroid hormones into the blood. This test is the most sensitive marker for screening for thyroid diseases and conditions.',
        'components_heading' => 'What Does the TSH Test Measure?',
        'components_text' => 'It measures a single hormone to evaluate thyroid function.',
        'components' => [
            ['title' => 'Thyroid Stimulating Hormone (TSH)', 'description' => 'Measures the pituitary gland\'s signal to the thyroid gland. It acts as a feedback mechanism.']
        ],
        'specimen_title' => 'Sample Required',
        'specimen_description' => 'A standard blood sample.',
        'specimen_items' => "Blood sample from a vein.\nCan be drawn at any time of the day.",
        'preparation_title' => 'Preparation Instructions',
        'preparation_description' => 'Generally, no special preparation is needed.',
        'preparation_items' => "No fasting required.\nCertain medications (like biotin) can interfere with the assay; tell your doctor about all supplements you take.",
        'results_heading' => 'Understanding TSH Results',
        'results_text' => 'TSH levels have an inverse relationship with thyroid hormone levels.',
        'results' => [
            ['title' => 'High TSH', 'description' => 'Usually indicates an underactive thyroid (hypothyroidism). The pituitary is producing more TSH to try to stimulate the thyroid.'],
            ['title' => 'Low TSH', 'description' => 'Usually indicates an overactive thyroid (hyperthyroidism). The pituitary is making less TSH because there is already too much thyroid hormone in the blood.']
        ],
        'faq_heading' => 'TSH Test FAQs',
        'faq_description' => 'Common questions regarding the TSH test.',
        'faqs' => [
            ['question' => 'What are the symptoms of an abnormal TSH?', 'answer' => 'High TSH (hypothyroidism) can cause fatigue, weight gain, and feeling cold. Low TSH (hyperthyroidism) can cause anxiety, weight loss, and rapid heartbeat.'],
            ['question' => 'If my TSH is abnormal, what happens next?', 'answer' => 'Your doctor will likely order additional tests, such as Free T4 and Free T3, to pinpoint the exact cause of the thyroid dysfunction.']
        ]
    ],
    6 => [
        'title' => 'Free T4',
        'about_image' => 'test_pages/free_t4_about.jpg',
        'about_heading' => 'What is a Free T4 Test?',
        'about_text' => 'A Free T4 (thyroxine) test measures the level of free thyroxine in your blood. Thyroxine is the main hormone produced by the thyroid gland. Most T4 in the blood is bound to protein; the "free" T4 is the active form of the hormone that is available to enter tissues and exert its effects. This test is used alongside a TSH test to evaluate thyroid function.',
        'components_heading' => 'What Does Free T4 Measure?',
        'components_text' => 'It measures the active form of the thyroid hormone.',
        'components' => [
            ['title' => 'Free Thyroxine (FT4)', 'description' => 'The unbound, biologically active portion of thyroxine in the blood.']
        ],
        'specimen_title' => 'Sample Requirements',
        'specimen_description' => 'A blood sample is required.',
        'specimen_items' => "Venous blood draw.\nCollected in a standard laboratory tube.",
        'preparation_title' => 'Test Preparation',
        'preparation_description' => 'No special preparation is typically required.',
        'preparation_items' => "No fasting is necessary.\nInform your doctor if you take thyroid replacement medication, as the timing of your dose may affect the results.",
        'results_heading' => 'Interpreting Free T4 Results',
        'results_text' => 'Free T4 results are almost always interpreted in conjunction with TSH results.',
        'results' => [
            ['title' => 'High Free T4', 'description' => 'Indicates hyperthyroidism (an overactive thyroid).'],
            ['title' => 'Low Free T4', 'description' => 'Indicates hypothyroidism (an underactive thyroid).']
        ],
        'faq_heading' => 'Free T4 FAQs',
        'faq_description' => 'Questions about the Free T4 blood test.',
        'faqs' => [
            ['question' => 'What is the difference between Total T4 and Free T4?', 'answer' => 'Total T4 measures both the bound and free forms of the hormone, and can be affected by the amount of protein in the blood. Free T4 measures only the active form and is considered a more accurate reflection of thyroid hormone function.'],
            ['question' => 'Can pregnancy affect my Free T4 levels?', 'answer' => 'Yes, pregnancy alters blood proteins and can affect thyroid hormone levels. Specialized reference ranges are used during pregnancy.']
        ]
    ],
    7 => [
        'title' => 'Complete Blood Count (CBC)',
        'about_image' => 'test_pages/complete_blood_count_cbc_about.jpg',
        'about_heading' => 'What is a Complete Blood Count (CBC)?',
        'about_text' => 'A Complete Blood Count (CBC) is one of the most common blood tests. It evaluates your overall health and can detect a wide range of disorders, including anemia, infection, and leukemia. The CBC measures several components and features of your blood, providing a comprehensive overview of your blood cells.',
        'components_heading' => 'What Does a CBC Measure?',
        'components_text' => 'A CBC measures the three main types of cells in your blood.',
        'components' => [
            ['title' => 'Red Blood Cells (RBC)', 'description' => 'Cells that carry oxygen from your lungs to the rest of your body.'],
            ['title' => 'White Blood Cells (WBC)', 'description' => 'Cells that fight infection and are part of the immune system.'],
            ['title' => 'Platelets', 'description' => 'Cell fragments that help your blood clot to stop bleeding.'],
            ['title' => 'Hemoglobin (Hb)', 'description' => 'The oxygen-carrying protein in red blood cells.'],
            ['title' => 'Hematocrit (Hct)', 'description' => 'The proportion of red blood cells to the fluid component (plasma) in your blood.']
        ],
        'specimen_title' => 'Specimen Collection',
        'specimen_description' => 'A standard blood sample.',
        'specimen_items' => "Venous blood drawn from the arm.\nCollected in a tube containing an anticoagulant (EDTA) to prevent clotting.",
        'preparation_title' => 'Preparation',
        'preparation_description' => 'Usually, no preparation is required.',
        'preparation_items' => "No fasting is necessary if a CBC is the only test being performed.\nIf part of a larger panel, fasting may be required.",
        'results_heading' => 'Understanding CBC Results',
        'results_text' => 'Abnormal levels in a CBC can indicate various health issues.',
        'results' => [
            ['title' => 'Low RBC, Hemoglobin, or Hematocrit', 'description' => 'Indicates anemia, which can cause fatigue and weakness.'],
            ['title' => 'High WBC Count', 'description' => 'May indicate an infection, inflammation, or an immune system disorder.'],
            ['title' => 'Low Platelet Count', 'description' => 'Can lead to prolonged bleeding or easy bruising.']
        ],
        'faq_heading' => 'CBC FAQs',
        'faq_description' => 'Common questions about the Complete Blood Count.',
        'faqs' => [
            ['question' => 'How often should I get a CBC?', 'answer' => 'A CBC is routinely performed during annual physical exams. It may be done more frequently if you are undergoing treatments like chemotherapy or if you have a blood disorder.'],
            ['question' => 'Can dehydration affect a CBC?', 'answer' => 'Yes, severe dehydration can cause your hematocrit and red blood cell count to appear artificially high.']
        ]
    ],
    8 => [
        'title' => 'CBC with Differential',
        'about_image' => 'test_pages/cbc_with_differential_about.jpg',
        'about_heading' => 'What is a CBC with Differential?',
        'about_text' => 'A CBC with Differential includes all the measurements of a standard Complete Blood Count, but it also measures the number of each type of white blood cell. This detailed breakdown helps doctors pinpoint the specific cause of an abnormal white blood cell count, such as distinguishing between a bacterial infection, a viral infection, or an allergic reaction.',
        'components_heading' => 'What Does the Differential Measure?',
        'components_text' => 'It measures the five major types of white blood cells.',
        'components' => [
            ['title' => 'Neutrophils', 'description' => 'The most common type of white blood cell, primarily responsible for fighting bacterial infections.'],
            ['title' => 'Lymphocytes', 'description' => 'Crucial for fighting viral infections and producing antibodies.'],
            ['title' => 'Monocytes', 'description' => 'Help break down bacteria and cellular debris.'],
            ['title' => 'Eosinophils', 'description' => 'Involved in allergic reactions and fighting parasitic infections.'],
            ['title' => 'Basophils', 'description' => 'Play a role in asthma and allergic responses by releasing histamine.']
        ],
        'specimen_title' => 'Sample Requirements',
        'specimen_description' => 'A standard blood sample.',
        'specimen_items' => "Venous blood draw.\nCollected in a lavender-top tube (EDTA).",
        'preparation_title' => 'Test Preparation',
        'preparation_description' => 'No special preparation is needed.',
        'preparation_items' => "No fasting required.\nCan be drawn at any time of day.",
        'results_heading' => 'Interpreting the Differential',
        'results_text' => 'The differential results show the percentage (and absolute number) of each cell type.',
        'results' => [
            ['title' => 'High Neutrophils', 'description' => 'Often indicates a bacterial infection or acute inflammation.'],
            ['title' => 'High Lymphocytes', 'description' => 'Frequently seen with viral infections.'],
            ['title' => 'High Eosinophils', 'description' => 'Can indicate an allergic reaction, asthma, or a parasitic infection.']
        ],
        'faq_heading' => 'CBC with Differential FAQs',
        'faq_description' => 'Questions about the differential test.',
        'faqs' => [
            ['question' => 'Why did my doctor order a CBC with differential instead of a regular CBC?', 'answer' => 'If your doctor suspects an infection, immune disorder, or leukemia, the differential provides essential clues about the specific nature of the problem.'],
            ['question' => 'Are abnormal differential results always serious?', 'answer' => 'No. Minor fluctuations can occur due to stress, exercise, or minor viral illnesses. Your doctor will interpret the results in context.']
        ]
    ],
    9 => [
        'title' => 'Hemoglobin & Hematocrit',
        'about_image' => 'test_pages/hemoglobin_hematocrit_about.jpg',
        'about_heading' => 'What are Hemoglobin and Hematocrit (H&H) Tests?',
        'about_text' => 'Hemoglobin and hematocrit are two closely related blood tests often performed together to evaluate red blood cells. Hemoglobin is the protein in red blood cells that carries oxygen. Hematocrit measures the percentage of your blood volume that is made up of red blood cells. These tests are the primary tools used to diagnose and monitor anemia.',
        'components_heading' => 'What Do H&H Tests Measure?',
        'components_text' => 'These tests assess the oxygen-carrying capacity of your blood.',
        'components' => [
            ['title' => 'Hemoglobin (Hb/Hgb)', 'description' => 'Measures the amount of the oxygen-carrying protein in your blood, expressed in grams per deciliter (g/dL).'],
            ['title' => 'Hematocrit (Hct)', 'description' => 'Measures the proportion of red blood cells in your blood, expressed as a percentage.']
        ],
        'specimen_title' => 'Sample Required',
        'specimen_description' => 'A small blood sample is needed.',
        'specimen_items' => "Can be drawn from a vein.\nCan also be performed via a finger prick (capillary sample).",
        'preparation_title' => 'Test Preparation',
        'preparation_description' => 'No special preparation is required.',
        'preparation_items' => "No fasting is necessary.\nMaintain normal hydration before the test.",
        'results_heading' => 'Understanding H&H Results',
        'results_text' => 'Hemoglobin and hematocrit levels generally rise and fall together.',
        'results' => [
            ['title' => 'Low H&H Levels', 'description' => 'Indicates anemia, which can be caused by iron deficiency, blood loss, or chronic disease.'],
            ['title' => 'High H&H Levels', 'description' => 'May indicate polycythemia vera, lung disease, smoking, or severe dehydration.']
        ],
        'faq_heading' => 'H&H Test FAQs',
        'faq_description' => 'Common questions about Hemoglobin and Hematocrit testing.',
        'faqs' => [
            ['question' => 'What is a normal hemoglobin level?', 'answer' => 'Normal ranges vary by age and sex. Generally, for men it is 13.8 to 17.2 g/dL, and for women it is 12.1 to 15.1 g/dL.'],
            ['question' => 'Are H&H tests part of a CBC?', 'answer' => 'Yes, both hemoglobin and hematocrit are standard components of a Complete Blood Count (CBC). However, they can also be ordered separately (often called an H&H) for quick monitoring of anemia or blood loss.']
        ]
    ]
];

foreach ($testData as $id => $data) {
    // 1. Update test_pages table
    DB::table('test_pages')->where('id', $id)->update([
        'about_heading' => $data['about_heading'],
        'about_text' => $data['about_text'],
        'about_image' => $data['about_image'],
        'components_heading' => $data['components_heading'],
        'components_text' => $data['components_text'],
        'specimen_title' => $data['specimen_title'],
        'specimen_description' => $data['specimen_description'],
        'specimen_items' => json_encode(explode("\n", $data['specimen_items'])),
        'preparation_title' => $data['preparation_title'],
        'preparation_description' => $data['preparation_description'],
        'preparation_items' => json_encode(explode("\n", $data['preparation_items'])),
        'results_heading' => $data['results_heading'],
        'results_text' => $data['results_text'],
        'faq_heading' => $data['faq_heading'],
        'faq_description' => $data['faq_description'],
    ]);

    // 2. Update components
    DB::table('test_page_components')->where('test_page_id', $id)->delete();
    foreach ($data['components'] as $comp) {
        DB::table('test_page_components')->insert([
            'test_page_id' => $id,
            'title' => $comp['title'],
            'description' => $comp['description'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    // 3. Update results
    DB::table('test_page_results')->where('test_page_id', $id)->delete();
    foreach ($data['results'] as $res) {
        DB::table('test_page_results')->insert([
            'test_page_id' => $id,
            'title' => $res['title'],
            'description' => $res['description'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    // 4. Update FAQs
    // First, get the service_id and test_id. We know service_id from test_pages. test_id we need to look up.
    $testPage = DB::table('test_pages')->where('id', $id)->first();
    // Assuming the test page title matches the test name exactly, or we can just link to service for now, or match by name.
    $test = DB::table('tests')->where('name', $testPage->title)->first();
    
    // Clean old faqs for this test_id
    if ($test) {
        DB::table('service_faqs')->where('test_id', $test->id)->delete();
        foreach ($data['faqs'] as $faq) {
            DB::table('service_faqs')->insert([
                'service_id' => $testPage->service_id,
                'test_id' => $test->id,
                'question' => $faq['question'],
                'answer' => $faq['answer'],
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

echo "Successfully populated all test pages!\n";
