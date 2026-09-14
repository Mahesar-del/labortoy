<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCatalogSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'name' => 'Chemistry Testing',
                'slug' => 'chemistry-testing',
                'summary' => 'Accurate chemistry testing that supports diagnosis, monitoring, and informed clinical decisions.',
                'hero_heading' => 'Chemistry Testing',
                'hero_description' => 'Reliable laboratory testing to assess metabolic health, organ function, and key clinical indicators.',
                'help_heading' => 'Where Chemistry Testing Can Help',
                'help_description' => 'Chemistry testing provides valuable insights into key health indicators, supporting routine assessment, diagnosis, and ongoing monitoring.',
                'help_cards' => [['Metabolic Health', 'Helps assess glucose, electrolytes, and other metabolic markers.'], ['Organ Function', 'Provides information about liver and kidney function.'], ['Health Monitoring', 'Supports routine testing and ongoing clinical assessment.'], ['Nutritional Balance', 'Helps evaluate essential nutrients and markers related to overall wellness.']],
            ],
            [
                'name' => 'Immunoassay Testing',
                'slug' => 'immunoassay-testing',
                'summary' => 'Targeted immunoassay testing that measures hormones, proteins, vitamins, and other important biomarkers.',
                'hero_heading' => 'Immunoassay Testing',
                'hero_description' => 'Precise immunoassay testing that supports clinical assessment, screening, and ongoing patient monitoring.',
                'help_heading' => 'Where Immunoassay Testing Can Help',
                'help_description' => 'Immunoassay testing helps measure important hormones, proteins, vitamins, and biomarkers used in clinical assessment.',
                'help_cards' => [['Thyroid Health', 'Supports assessment of thyroid hormone levels and function.'], ['Cardiac Assessment', 'Helps measure cardiac markers used in clinical evaluation.'], ['Hormone Testing', 'Provides information about reproductive and other hormone levels.'], ['Wellness Screening', 'Supports vitamin testing and routine health monitoring.']],
            ],
            [
                'name' => 'Hematology',
                'slug' => 'hematology',
                'summary' => 'Comprehensive blood testing that helps evaluate blood cells, oxygen-carrying capacity, and overall health.',
                'hero_heading' => 'Hematology',
                'hero_description' => 'Reliable hematology testing to support diagnosis, monitoring, and informed clinical decisions.',
                'help_heading' => 'Where Hematology Can Help',
                'help_description' => 'Hematology testing evaluates blood cells and related markers to support clinical assessment and monitoring.',
                'help_cards' => [['Blood Cell Health', 'Measures red blood cells, white blood cells, and platelets.'], ['Anemia Evaluation', 'Supports evaluation of hemoglobin, hematocrit, and red blood cell production.'], ['Infection & Inflammation', 'Helps assess white blood cell patterns that can support clinical evaluation.'], ['Clotting Assessment', 'Provides platelet information that supports assessment of normal clotting.']],
            ],
        ];

        $serviceIds = [];
        foreach ($services as $service) {
            $existing = DB::table('services')->where('slug', $service['slug'])->first();
            if ($existing) {
                DB::table('services')->where('id', $existing->id)->update([
                    'summary' => $existing->summary ?: $service['summary'],
                    'hero_heading' => $existing->hero_heading ?: $service['hero_heading'],
                    'hero_description' => $existing->hero_description ?: $service['hero_description'],
                    'help_heading' => $service['help_heading'],
                    'help_description' => $service['help_description'],
                    'help_cards' => json_encode(array_map(function ($card) { return ['heading' => $card[0], 'description' => $card[1]]; }, $service['help_cards'])),
                    'button_text' => $existing->button_text ?: 'Book an Appointment',
                    'button_link' => $existing->button_link ?: '/appointment',
                    'is_active' => true,
                    'updated_at' => now(),
                ]);
                $serviceIds[$service['slug']] = $existing->id;
                continue;
            }

            $serviceIds[$service['slug']] = DB::table('services')->insertGetId([
                'name' => $service['name'],
                'slug' => $service['slug'],
                'summary' => $service['summary'],
                'hero_heading' => $service['hero_heading'],
                'hero_description' => $service['hero_description'],
                'help_heading' => $service['help_heading'],
                'help_description' => $service['help_description'],
                'help_cards' => json_encode(array_map(function ($card) { return ['heading' => $card[0], 'description' => $card[1]]; }, $service['help_cards'])),
                'button_text' => 'Book an Appointment',
                'button_link' => '/appointment',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $tests = [
            'immunoassay-testing' => [
                ['Thyroid Stimulating Hormone (TSH)', 'Thyroid function assessment', 'Measures TSH to help assess thyroid function and support evaluation of thyroid-related conditions.'],
                ['Free T4', 'Free T4 thyroid hormone test', 'Measures free thyroxine levels to provide additional information about thyroid function.'],
                ['Troponin', 'Troponin cardiac marker', 'Measures troponin, a key cardiac marker used to support assessment of heart muscle injury.'],
                ['Vitamin D', 'Vitamin D level test', 'Measures vitamin D levels to help assess nutritional status and support bone health evaluation.'],
                ['Beta-hCG / Pregnancy Test', 'Beta-hCG pregnancy test', 'Measures beta-hCG to support pregnancy testing and related clinical assessment.'],
                ['Prostate-Specific Antigen (PSA)', 'PSA screening test', 'Measures PSA levels to support prostate health assessment and clinical monitoring.'],
            ],
            'hematology' => [
                ['Complete Blood Count (CBC)', 'Complete Blood Count', 'Provides an overview of red cells, white cells, hemoglobin, hematocrit, and platelets.'],
                ['CBC with Differential', 'CBC with Differential', 'Measures blood cell counts and the distribution of white blood cell types.'],
                ['Hemoglobin & Hematocrit', 'Hemoglobin & Hematocrit', 'Assesses oxygen-carrying capacity and the proportion of red blood cells in the blood.'],
                ['Platelet Count', 'Platelet Count', 'Measures platelets, which play an important role in normal blood clotting.'],
                ['Reticulocyte Count', 'Reticulocyte Count', 'Measures young red blood cells to support evaluation of bone marrow response.'],
                ['Peripheral Blood Smear', 'Peripheral Blood Smear', 'Examines blood cell appearance and morphology to support further hematology evaluation.'],
            ],
        ];

        foreach ($tests as $slug => $items) {
            foreach ($items as $test) {
                DB::table('tests')->updateOrInsert(
                    ['service_id' => $serviceIds[$slug], 'name' => $test[0]],
                    ['heading' => $test[1], 'description' => $test[2], 'is_active' => true, 'updated_at' => now(), 'created_at' => now()]
                );
            }
        }
    }
}
