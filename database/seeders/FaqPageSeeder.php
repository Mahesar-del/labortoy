<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqPageSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Getting Ready for Testing',
                'slug' => 'cat-getting-ready',
                'sort_order' => 1,
                'items' => [
                    [
                        'question' => "Where can I find Sterling's available tests?",
                        'answer' => "Available laboratory testing can be explored through Sterling's Test Directory. Test-specific information should be reviewed before ordering.",
                    ],
                    [
                        'question' => "How do I know which specimen is required?",
                        'answer' => "Specimen requirements (blood, urine, saliva, or tissue) are detailed on each test's information page and in provider ordering guidelines.",
                    ],
                    [
                        'question' => "Where can I find collection instructions?",
                        'answer' => "Collection and fasting instructions are provided at the time of order and can also be found in our online testing documentation.",
                    ],
                    [
                        'question' => "Do I need to fast before my blood draw or laboratory test?",
                        'answer' => "Fasting requirements depend on the specific test ordered. For standard lipid panels or glucose tests, 8 to 12 hours of fasting may be required.",
                    ],
                    [
                        'question' => "What should I bring to my testing center visit?",
                        'answer' => "Please bring a valid photo ID, your health insurance card, and any lab requisition form provided by your healthcare provider.",
                    ],
                ]
            ],
            [
                'name' => 'Testing & Results',
                'slug' => 'cat-testing-results',
                'sort_order' => 2,
                'items' => [
                    [
                        'question' => "How long does it take to receive my laboratory test results?",
                        'answer' => "Most routine diagnostic test results are available within 24 to 48 hours. Specialized genetic or molecular testing may take 3 to 5 business days.",
                    ],
                    [
                        'question' => "How will I receive my lab test results?",
                        'answer' => "Results are delivered securely through our Online Patient Portal. They are also sent directly to your ordering physician.",
                    ],
                    [
                        'question' => "Can Sterling explain or interpret my test results to me?",
                        'answer' => "While our laboratory staff ensures maximum precision, your healthcare provider is best qualified to explain and interpret your results in the context of your overall health.",
                    ],
                    [
                        'question' => "What should I do if my test results are urgent or abnormal?",
                        'answer' => "Critical or urgent abnormal values are reported directly and immediately to your ordering doctor for rapid follow-up and clinical management.",
                    ],
                    [
                        'question' => "Can I request a copy of my historical lab reports?",
                        'answer' => "Yes, historical laboratory reports can be viewed and downloaded anytime through your patient portal account or requested via customer support.",
                    ],
                ]
            ],
            [
                'name' => 'Billing & Payments',
                'slug' => 'cat-billing-payments',
                'sort_order' => 3,
                'items' => [
                    [
                        'question' => "Does Sterling accept my health insurance plan?",
                        'answer' => "Sterling partners with major insurance providers. Please check our accepted insurance page or contact your provider to confirm coverage.",
                    ],
                    [
                        'question' => "How can I pay my laboratory bill or invoice online?",
                        'answer' => "You can conveniently pay your invoice online through our secure payment gateway using major credit cards or debit cards.",
                    ],
                    [
                        'question' => "What if I do not have health insurance or wish to self-pay?",
                        'answer' => "We offer affordable self-pay transparent pricing options for patients without insurance or for non-covered elective tests.",
                    ],
                    [
                        'question' => "Why did I receive a bill from Sterling Laboratory?",
                        'answer' => "You received a bill for laboratory diagnostic services ordered by your physician that were not fully covered by your insurance copay or deductible.",
                    ],
                    [
                        'question' => "Who can I contact if I have questions about my statement?",
                        'answer' => "Our billing support team is available Monday through Friday from 9 AM to 6 PM to assist you with any billing or payment inquiry.",
                    ],
                ]
            ],
            [
                'name' => 'Appointments',
                'slug' => 'cat-appointments',
                'sort_order' => 4,
                'items' => [
                    [
                        'question' => "Do I need an appointment, or can I walk in for testing?",
                        'answer' => "Walk-ins are welcome at most patient service centers, but scheduling an appointment online minimizes your wait time.",
                    ],
                    [
                        'question' => "How do I schedule, reschedule, or cancel a lab appointment?",
                        'answer' => "Appointments can be easily booked, rescheduled, or cancelled online through our website or mobile portal at your convenience.",
                    ],
                    [
                        'question' => "What should I do if I am running late for my appointment?",
                        'answer' => "If you are running more than 15 minutes late, we will still do our best to accommodate you, though a brief wait may be required.",
                    ],
                    [
                        'question' => "Can I schedule appointments for family members or dependents?",
                        'answer' => "Yes, you can manage and schedule appointments for family members and dependents under your main patient portal account.",
                    ],
                    [
                        'question' => "How early should I arrive before my scheduled appointment time?",
                        'answer' => "We recommend arriving 10 minutes prior to your scheduled time to complete any quick check-in procedures.",
                    ],
                ]
            ],
            [
                'name' => 'General Questions',
                'slug' => 'cat-general-questions',
                'sort_order' => 5,
                'items' => [
                    [
                        'question' => "How do I find a Sterling Patient Service Center near me?",
                        'answer' => "You can use our online Location Finder tool to search by zip code or city to find the nearest patient center and operating hours.",
                    ],
                    [
                        'question' => "Are Sterling laboratory facilities accredited and certified?",
                        'answer' => "Yes, Sterling laboratories are fully accredited by CLIA and CAP, adhering to the highest regulatory standards of quality and accuracy.",
                    ],
                    [
                        'question' => "How does Sterling protect my personal and medical data privacy?",
                        'answer' => "We strictly adhere to HIPAA guidelines and employ advanced digital encryption to safeguard all your personal and health data.",
                    ],
                    [
                        'question' => "Can I order my own lab tests without a doctor's referral?",
                        'answer' => "Direct-to-consumer testing is available for select wellness and screening tests depending on state regulations and guidelines.",
                    ],
                    [
                        'question' => "How can I contact Sterling Customer Support for further assistance?",
                        'answer' => "You can reach our customer support team via phone, email at info@sterlinglab.com, or through our website contact form.",
                    ],
                ]
            ],
        ];

        foreach ($data as $catData) {
            DB::table('faq_categories')->updateOrInsert(
                ['slug' => $catData['slug']],
                [
                    'name' => $catData['name'],
                    'sort_order' => $catData['sort_order'],
                    'is_active' => true,
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );

            $category = DB::table('faq_categories')->where('slug', $catData['slug'])->first();

            DB::table('faq_items')->where('faq_category_id', $category->id)->delete();

            $sortOrder = 1;
            foreach ($catData['items'] as $item) {
                DB::table('faq_items')->insert([
                    'faq_category_id' => $category->id,
                    'question' => $item['question'],
                    'answer' => $item['answer'],
                    'sort_order' => $sortOrder++,
                    'is_active' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
