<?php
$c = file_get_contents('c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/cbc-test.blade.php');
echo "Components: " . (strpos($c, "<!-- Key Components Section -->") !== false ? "Found\n" : "Missing\n");
echo "Specimen: " . (strpos($c, "<!-- Specimen and Preparation Section -->") !== false ? "Found\n" : "Missing\n");
echo "Process Explained: " . (strpos($c, "@include('components.process-explained')") !== false ? "Found\n" : "Missing\n");
echo "Results: " . (strpos($c, "<!-- Results Section -->") !== false ? "Found\n" : "Missing\n");
echo "SVG Icons: " . substr_count($c, "<svg width=\"28\"") . "\n";
