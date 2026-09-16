<?php
$filePath = 'c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/test-page.blade.php';
$content = file_get_contents($filePath);

// Extract the two blocks by using more flexible logic
// The Specimen section starts with "@if(\$testPage->specimen_title || \$testPage->preparation_title)"
// and ends at the FIRST "@endif" after the "<style>" block ends with "</style>".

$specimenStart = strpos($content, "@if(\$testPage->specimen_title || \$testPage->preparation_title)");
$specimenStyleEnd = strpos($content, "</style>", $specimenStart);
$specimenEnd = strpos($content, "@endif", $specimenStyleEnd) + 6;

$specimenBlock = trim(substr($content, $specimenStart, $specimenEnd - $specimenStart));

$componentsStart = strpos($content, "@if(\$testPage->components && \$testPage->components->count())");
$componentsStyleEnd = strpos($content, "</style>", $componentsStart);
$componentsEnd = strpos($content, "@endif", $componentsStyleEnd) + 6;

$componentsBlock = trim(substr($content, $componentsStart, $componentsEnd - $componentsStart));

if ($specimenStart !== false && $componentsStart !== false) {
    // Reconstruct the file: Everything before the first block, then components, then specimen, then everything after the second block.
    // Wait, currently specimen is FIRST, then components.
    
    $beforeSpecimen = substr($content, 0, $specimenStart);
    $afterComponents = substr($content, $componentsEnd);
    
    $newContent = rtrim($beforeSpecimen) . "\n\n    " . $componentsBlock . "\n\n    " . $specimenBlock . "\n\n" . ltrim($afterComponents);
    
    file_put_contents($filePath, $newContent);
    echo "Swapped successfully.\n";
} else {
    echo "Tokens not found.\n";
}
