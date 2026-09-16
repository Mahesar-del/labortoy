use App\Models\BlogPost;

BlogPost::create([
    'title' => 'The Importance of Regular CBC Testing',
    'slug' => 'importance-of-regular-cbc-testing',
    'status' => 'Published',
    'author' => 'Dr. Sarah Jenkins',
    'publish_date' => now(),
    'tags' => 'Health, Blood Test, Wellness',
    'excerpt' => '<p>A Complete Blood Count (CBC) is one of the most common and important blood tests. Learn why regular monitoring is crucial for your long-term health.</p>',
    'key_takeaways' => '<ul><li>CBC tests can detect a variety of disorders, including anemia and infection.</li><li>Regular testing helps establish a healthy baseline.</li><li>Early detection leads to better treatment outcomes.</li></ul>',
    'content' => '<h2>Why is a CBC Test So Important?</h2><p>A complete blood count (CBC) is a blood test used to evaluate your overall health and detect a wide range of disorders. It measures several components and features of your blood, including red blood cells, white blood cells, and platelets. Getting this test done annually can give your healthcare provider crucial insights into your health trends.</p><p>Understanding your results with the help of a certified professional can make a huge difference in preventative care.</p>',
    'featured_image' => 'blog_images/cbc_testing_lab_1789469014097.jpg',
    'meta_title' => 'The Importance of Regular CBC Testing | Lab Blog',
    'meta_description' => 'Learn why regular Complete Blood Count (CBC) monitoring is crucial for your long-term health.',
    'allow_indexing' => true,
    'visibility_public' => true
]);

BlogPost::create([
    'title' => 'Advancements in Modern Laboratory Equipment',
    'slug' => 'advancements-modern-lab-equipment',
    'status' => 'Published',
    'author' => 'Tech Specialist',
    'publish_date' => now()->subDays(2),
    'tags' => 'Technology, Innovation, Lab Equipment',
    'excerpt' => '<p>Explore how cutting-edge automated chemistry analyzers and robotic sample handling are revolutionizing the speed and accuracy of medical testing.</p>',
    'key_takeaways' => '<ul><li>Automation reduces human error and processing time.</li><li>New analyzers can process thousands of samples per hour.</li><li>Digital integration ensures seamless reporting to doctors.</li></ul>',
    'content' => '<h2>The Future is Automated</h2><p>The landscape of medical laboratories is shifting rapidly. With the introduction of high-throughput automated analyzers, labs can now process tests with unprecedented speed and precision.</p><p>These modern marvels use advanced sensors and robotics to handle samples safely, reducing the turnaround time for critical diagnoses from days to mere hours.</p>',
    'featured_image' => 'blog_images/modern_lab_equipment_1789469025796.jpg',
    'meta_title' => 'Modern Laboratory Equipment Advancements',
    'meta_description' => 'Explore how cutting-edge automated chemistry analyzers are revolutionizing medical testing.',
    'allow_indexing' => true,
    'visibility_public' => true
]);

BlogPost::create([
    'title' => 'Understanding Your Lab Test Results',
    'slug' => 'understanding-your-lab-test-results',
    'status' => 'Published',
    'author' => 'Dr. Mike Ross',
    'publish_date' => now()->subDays(5),
    'tags' => 'Patient Education, Lab Results, Wellness',
    'excerpt' => '<p>Lab results can be confusing with all their medical jargon and numbers. Here is a simplified guide on how to read and interpret your next lab report.</p>',
    'key_takeaways' => '<ul><li>Always look at the reference ranges provided.</li><li>An abnormal result does not always mean illness.</li><li>Discuss all results with your primary care physician.</li></ul>',
    'content' => '<h2>Decoding the Numbers</h2><p>When you receive a lab report, it is common to feel overwhelmed by the sheer volume of data, abbreviations, and reference ranges. However, understanding a few key principles can help you feel more in control.</p><p>First, always check the reference range column, which shows the normal values for your age and gender. If your result falls outside this range, it will usually be flagged. Do not panic; many benign factors can cause temporary fluctuations. Always consult your doctor for a proper interpretation.</p>',
    'featured_image' => 'blog_images/lab_test_results_1789469036822.jpg',
    'meta_title' => 'Understanding Your Lab Test Results',
    'meta_description' => 'A simplified guide on how to read and interpret your next lab report.',
    'allow_indexing' => true,
    'visibility_public' => true
]);
