<?php
$filePath = 'c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/test-page.blade.php';
$content = file_get_contents($filePath);

$svgIcons = [
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>'
];

// In test-page.blade.php, it's inside a loop:
$replacement = <<<EOD
                        @else
                            @php \$svgIndex = \$loop->index % 4; @endphp
                            @if(\$svgIndex == 0)
                                {$svgIcons[0]}
                            @elseif(\$svgIndex == 1)
                                {$svgIcons[1]}
                            @elseif(\$svgIndex == 2)
                                {$svgIcons[2]}
                            @elseif(\$svgIndex == 3)
                                {$svgIcons[3]}
                            @endif
                        @endif
EOD;

$content = preg_replace('/@else\s*<!-- Placeholder if no icon -->\s*<div[^>]*><\/div>\s*@endif/s', $replacement, $content);
file_put_contents($filePath, $content);
echo "SVGs injected.\n";

// NOW fix the FAQ padding!
$content = preg_replace('/(\.cbc-faq-section\s*\{\s*padding:\s*0\s+99px\s+)60px(\s+99px;\s*)/s', '${1}20px${2}', $content);
file_put_contents($filePath, $content);
echo "FAQ padding updated in test-page.blade.php.\n";


// Do the same FAQ padding fix for cbc-test.blade.php
$filePath2 = 'c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/cbc-test.blade.php';
$content2 = file_get_contents($filePath2);
$content2 = preg_replace('/(\.cbc-faq-section\s*\{\s*padding:\s*0\s+99px\s+)60px(\s+99px;\s*)/s', '${1}20px${2}', $content2);
file_put_contents($filePath2, $content2);
echo "FAQ padding updated in cbc-test.blade.php.\n";
