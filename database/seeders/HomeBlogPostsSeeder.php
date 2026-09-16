<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class HomeBlogPostsSeeder extends Seeder
{
    public function run()
    {
        BlogPost::whereIn('slug', [
            'understanding-your-laboratory-test-journey',
            'how-laboratories-support-reliable-results',
            'molecular-diagnostics-explained',
        ])->update(['status' => 'draft', 'show_on_home' => false, 'feature_on_home' => false]);

        $posts = [
            [
                'slug' => 'lab-on-a-chip-devices-for-rapid-diagnostics',
                'title' => 'Lab-on-a-Chip Devices for Rapid Diagnostics',
                'category' => 'Biomedical',
                'tags' => 'Biomedical, Diagnostics, Laboratory Technology',
                'image_path' => 'images/first-img.jpg',
                'image_alt_text' => 'Laboratory scientist working with diagnostic equipment',
                'excerpt' => 'An introduction to compact lab-on-a-chip systems and how they bring multiple laboratory steps onto a small device.',
                'content' => '<p>Lab-on-a-chip technology brings selected laboratory processes together on a compact device. These systems can support research into faster, smaller-scale diagnostic workflows.</p><h2>How the technology works</h2><p>Channels and reaction areas built into a chip guide small sample volumes through specific steps. The design depends on the intended application and the analysis being performed.</p><h2>Part of a wider laboratory workflow</h2><p>These devices complement, rather than replace, validated laboratory processes. Test selection and interpretation remain matters for qualified healthcare professionals.</p>',
            ],
            [
                'slug' => 'standardizing-sample-handling-in-clinical-labs',
                'title' => 'Standardizing Sample Handling in Clinical Labs',
                'category' => 'Laboratory',
                'tags' => 'Laboratory, Sample Handling, Quality',
                'image_path' => 'images/second-img.jpg',
                'image_alt_text' => 'Clinical laboratory staff preparing a sample',
                'excerpt' => 'Why clear, consistent sample-handling procedures matter throughout a clinical laboratory workflow.',
                'content' => '<p>Consistent sample handling helps laboratories follow a clear process from specimen receipt through preparation and analysis. Each test has its own requirements, so teams use documented procedures suited to the sample and method.</p><h2>Identification and preparation</h2><p>Accurate labeling, appropriate storage, and careful preparation help maintain traceability and sample quality. Staff follow the instructions associated with each requested test.</p><h2>Communication matters</h2><p>If a sample needs special preparation or recollection, the laboratory communicates with the ordering care team so the next step can be determined.</p>',
            ],
            [
                'slug' => 'ai-powered-drug-discovery-in-modern-research',
                'title' => 'AI-Powered Drug Discovery in Modern Research',
                'category' => 'Biology',
                'tags' => 'Biology, Artificial Intelligence, Research',
                'image_path' => 'images/third-img.jpg',
                'image_alt_text' => 'Digital visualization representing AI and biological research',
                'excerpt' => 'A high-level look at how computational tools can help researchers explore biological data during early-stage drug discovery.',
                'content' => '<p>Researchers can use computational tools to organize and explore large biological datasets. In early-stage drug discovery, these methods may help teams generate hypotheses and prioritize questions for further study.</p><h2>Supporting research, not replacing it</h2><p>Predictions from computational methods need careful evaluation and experimental follow-up. Their usefulness depends on the quality of the data, the question being studied, and the validation process.</p><h2>Human expertise remains central</h2><p>Scientists interpret results in context, assess limitations, and determine what should be tested next. AI is one tool in a broader research workflow.</p>',
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::firstOrCreate(
                ['slug' => $post['slug']],
                array_merge($post, [
                    'status' => 'published',
                    'author' => 'SGMCD Lab Editorial Team',
                    'publish_date' => '2026-03-18',
                    'show_on_home' => true,
                    'feature_on_home' => true,
                ])
            );
        }
    }
}
