<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Author;
use Illuminate\Support\Str;

$authorsData = [
    [
        'name' => 'Dr. Sarah Jenkins',
        'source_img' => 'C:\\Users\\DELL\\.gemini\\antigravity-ide\\brain\\fb05edaa-9916-49a0-bff3-01915ae07b50\\sarah_jenkins_1789471183292.jpg',
        'dest_img' => 'sarah-jenkins.jpg',
        'description' => 'Dr. Sarah Jenkins is a leading medical professional dedicated to providing accurate and helpful information about laboratory testing.'
    ],
    [
        'name' => 'Tech Specialist',
        'source_img' => 'C:\\Users\\DELL\\.gemini\\antigravity-ide\\brain\\fb05edaa-9916-49a0-bff3-01915ae07b50\\tech_specialist_1789471194984.jpg',
        'dest_img' => 'tech-specialist.jpg',
        'description' => 'Our tech specialists are highly trained experts who ensure the precision and reliability of every diagnostic test.'
    ],
    [
        'name' => 'Dr. Mike Ross',
        'source_img' => 'C:\\Users\\DELL\\.gemini\\antigravity-ide\\brain\\fb05edaa-9916-49a0-bff3-01915ae07b50\\mike_ross_1789471206938.jpg',
        'dest_img' => 'mike-ross.jpg',
        'description' => 'Dr. Mike Ross brings decades of experience to the lab, offering insights into the latest advancements in diagnostic medicine.'
    ]
];

foreach ($authorsData as $data) {
    if (file_exists($data['source_img'])) {
        copy($data['source_img'], storage_path('app/public/' . $data['dest_img']));
    }

    Author::updateOrCreate(
        ['name' => $data['name']],
        [
            'slug' => Str::slug($data['name']),
            'status' => 'Published',
            'profile_image' => $data['dest_img'],
            'description' => $data['description']
        ]
    );
}

echo "Authors seeded successfully.";
