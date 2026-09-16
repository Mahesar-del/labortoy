<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class HomeBlogPostsSeeder extends Seeder
{
    public function run()
    {
        $posts = [
            [
                'slug' => 'understanding-your-laboratory-test-journey',
                'title' => 'Understanding Your Laboratory Test Journey',
                'category' => 'Patient Guide',
                'tags' => 'Patient Guide, Diagnostics',
                'image_path' => null,
                'image_alt_text' => 'Modern laboratory diagnostic testing',
                'excerpt' => 'A simple overview of what to expect before, during, and after a diagnostic laboratory test.',
                'content' => '<p>Laboratory testing is one part of a broader conversation about your health. Your care team can explain why a test was requested and how its result may be used.</p><h2>Before your visit</h2><p>Check the instructions provided by your clinician or laboratory. Some tests have specific preparation requirements, while others do not. If anything is unclear, ask your care team before your appointment.</p><h2>After sample collection</h2><p>Samples are labeled and processed for the requested analysis. Timing can vary by test. Your clinician is best placed to interpret results in the context of your symptoms and health history.</p>',
            ],
            [
                'slug' => 'how-laboratories-support-reliable-results',
                'title' => 'How Laboratories Support Reliable Results',
                'category' => 'Laboratory Insights',
                'tags' => 'Laboratory, Quality',
                'image_path' => null,
                'image_alt_text' => 'Laboratory sample preparation and handling',
                'excerpt' => 'A look at the careful steps labs use to handle samples and report diagnostic findings.',
                'content' => '<p>Reliable laboratory reporting depends on a series of careful steps, from receiving and identifying a sample to performing the requested analysis and reviewing the result.</p><h2>Careful sample handling</h2><p>Laboratories follow defined procedures for labeling, storage, and preparation. These steps help maintain sample quality and make sure the correct test is performed on the correct specimen.</p><h2>Clear communication</h2><p>Reports are shared with the ordering healthcare professional, who can explain what the findings mean for an individual patient and whether any follow-up is appropriate.</p>',
            ],
            [
                'slug' => 'molecular-diagnostics-explained',
                'title' => 'Molecular Diagnostics, Explained',
                'category' => 'Diagnostics',
                'tags' => 'Molecular Diagnostics, Technology',
                'image_path' => null,
                'image_alt_text' => 'Modern diagnostic laboratory technology',
                'excerpt' => 'Learn how molecular methods help laboratories examine specific genetic material in a sample.',
                'content' => '<p>Molecular diagnostics is a group of laboratory methods that examine genetic material, such as DNA or RNA, in a specimen. The exact method and purpose depend on the test ordered.</p><h2>Why a test may be requested</h2><p>A healthcare professional may use a molecular test as one source of information when assessing a clinical question. Not every test is appropriate for every person or situation.</p><h2>Discussing results</h2><p>Results should be interpreted by a qualified healthcare professional alongside other relevant clinical information. Ask your care team what a specific result means for you.</p>',
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::firstOrCreate(
                ['slug' => $post['slug']],
                array_merge($post, [
                    'status' => 'published',
                    'author' => 'SGMCD Lab Editorial Team',
                    'publish_date' => now()->toDateString(),
                    'show_on_home' => true,
                    'feature_on_home' => true,
                ])
            );
        }
    }
}
