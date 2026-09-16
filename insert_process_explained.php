<?php
$filePath = 'c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/test-page.blade.php';
$content = file_get_contents($filePath);

// 1. First remove any stray @include('components.process-explained')
$content = preg_replace("/\s*@include\('components\.process-explained'\)\s*/", "\n\n", $content);

// 2. Insert it before the Results section
// The Results section starts with "@if($testPage->results && $testPage->results->count())"
// We'll search for this string precisely.
$resultsStartStr = "@if(\$testPage->results && \$testPage->results->count())";
$newResultsStartStr = "@include('components.process-explained')\n\n@if(\$testPage->results && \$testPage->results->count())";

$content = str_replace($resultsStartStr, $newResultsStartStr, $content);

file_put_contents($filePath, $content);
echo "Process Explained inserted successfully.\n";
