<?php
$c = file_get_contents('c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/test-page.blade.php');
echo "Components: " . (strpos($c, "class=\"cbc-components-section\"") !== false ? "Found\n" : "Missing\n");
echo "Specimen: " . (strpos($c, "class=\"cbc-sp-section\"") !== false ? "Found\n" : "Missing\n");
echo "Process Explained: " . (strpos($c, "@include('components.process-explained')") !== false ? "Found\n" : "Missing\n");
echo "Results: " . (strpos($c, "class=\"cbc-results-section\"") !== false ? "Found\n" : "Missing\n");
echo "SVG Icons: " . substr_count($c, "<svg width=\"28\"") . "\n";
echo "CTA: " . (strpos($c, "@include('components.diagnostics-cta.cta')") !== false ? "Found\n" : "Missing\n");

$specimenPos = strpos($c, "class=\"cbc-sp-section\"");
$componentsPos = strpos($c, "class=\"cbc-components-section\"");

if ($specimenPos !== false && $componentsPos !== false) {
    echo ($componentsPos < $specimenPos) ? "Order: Components BEFORE Specimen\n" : "Order: Specimen BEFORE Components\n";
}
