<?php
$filePath = 'c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/cbc-test.blade.php';
$content = file_get_contents($filePath);

// 1. Swap Components and Specimen
$specimenStart = strpos($content, "<!-- Specimen and Preparation Section -->");
$specimenEnd = strpos($content, "</style>", $specimenStart) + 8;
$specimenBlock = trim(substr($content, $specimenStart, $specimenEnd - $specimenStart));

$componentsStart = strpos($content, "<!-- Key Components Section -->");
$componentsEnd = strpos($content, "</style>", $componentsStart) + 8;
$componentsBlock = trim(substr($content, $componentsStart, $componentsEnd - $componentsStart));

if ($specimenStart !== false && $componentsStart !== false) {
    if ($specimenStart < $componentsStart) {
        $beforeSpecimen = substr($content, 0, $specimenStart);
        $afterComponents = substr($content, $componentsEnd);
        $content = rtrim($beforeSpecimen) . "\n\n    " . $componentsBlock . "\n\n    " . $specimenBlock . "\n\n" . ltrim($afterComponents);
    }
}

// 2. Insert process-explained after Specimen (which is now after Components)
// The results section starts with "<!-- Results Section -->"
$resultsStartStr = "<!-- Results Section -->";
$newResultsStartStr = "@include('components.process-explained')\n\n    <!-- Results Section -->";

if (strpos($content, "@include('components.process-explained')") === false) {
    $content = str_replace($resultsStartStr, $newResultsStartStr, $content);
}

// 3. Update the 4 component icons to be the SVG circles
$svgIcons = [
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>',
    '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>'
];

// Re-write the cbc-card-icon divs
$content = preg_replace_callback('/<div class="cbc-card-icon">\s*<img[^>]*>\s*<\/div>/', function($matches) use (&$svgIcons) {
    static $i = 0;
    $svg = $svgIcons[$i % 4];
    $i++;
    return '<div class="cbc-card-icon">' . "\n                        " . $svg . "\n                    " . '</div>';
}, $content);


// 4. Add CTA at the end
$footerIncludeToken = "    @include('components.footer')";
$ctaFooterInclude = "    @include('components.diagnostics-cta.cta')\n    @include('components.footer')";

if (strpos($content, "@include('components.diagnostics-cta.cta')") === false) {
    $content = str_replace($footerIncludeToken, $ctaFooterInclude, $content);
}

file_put_contents($filePath, $content);
echo "cbc-test.blade.php updated.\n";
