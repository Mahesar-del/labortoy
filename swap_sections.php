<?php
$filePath = 'c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/test-page.blade.php';
$content = file_get_contents($filePath);

$specimenStartToken = "@if(\$testPage->specimen_title || \$testPage->preparation_title)\n    <!-- Specimen and Preparation Section -->";
$specimenEndToken = "    @endif\n\n    @if(\$testPage->components && \$testPage->components->count())";
$componentsStartToken = "    @if(\$testPage->components && \$testPage->components->count())\n    <!-- Key Components Section -->";
$componentsEndToken = "    </style>\n    @endif\n\n    @if(\$testPage->results && \$testPage->results->count())";

// Extract Specimen block (lines 217-361)
$specimenBlockStart = strpos($content, $specimenStartToken);
$specimenBlockEnd = strpos($content, "@endif", strpos($content, "/* Specimen and Preparation Section */")) + strlen("@endif");
$specimenBlock = substr($content, $specimenBlockStart, $specimenBlockEnd - $specimenBlockStart);

// Extract Components block (lines 363-510)
$componentsBlockStart = strpos($content, $componentsStartToken);
$componentsBlockEnd = strpos($content, "@endif", strpos($content, "/* CBC Components Section */")) + strlen("@endif");
$componentsBlock = substr($content, $componentsBlockStart, $componentsBlockEnd - $componentsBlockStart);

if ($specimenBlockStart !== false && $componentsBlockStart !== false) {
    // Rebuild the content from pieces
    $beforeSpecimen = substr($content, 0, $specimenBlockStart);
    $afterComponents = substr($content, $componentsBlockEnd);
    
    // Ensure we maintain empty lines between blocks
    $newContent = $beforeSpecimen . $componentsBlock . "\n\n    " . $specimenBlock . $afterComponents;
    
    file_put_contents($filePath, $newContent);
    echo "Swapped successfully.\n";
} else {
    echo "Tokens not found.\n";
}
