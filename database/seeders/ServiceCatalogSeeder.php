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
            ],
            [
                'name' => 'Immunoassay Testing',
                'slug' => 'immunoassay-testing',
                'summary' => 'Targeted immunoassay testing that measures hormones, proteins, vitamins, and other important biomarkers.',
                'hero_heading' => 'Immunoassay Testing',
                'hero_description' => 'Precise immunoassay testing that supports clinical assessment, screening, and ongoing patient monitoring.',
            ],
            [
                'name' => 'Hematology',
                'slug' => 'hematology',
                'summary' => 'Comprehensive blood testing that helps evaluate blood cells, oxygen-carrying capacity, and overall health.',
                'hero_heading' => 'Hematology',
                'hero_description' => 'Reliable hematology testing to support diagnosis, monitoring, and informed clinical decisions.',
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
