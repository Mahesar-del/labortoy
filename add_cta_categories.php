<?php
$dir = 'c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/';
$files = [
    'clinical-diagnostics.blade.php',
    'genomic-diagnostics.blade.php', 
    'molecular-diagnostics.blade.php'
];

foreach ($files as $file) {
    $path = $dir . $file;
    if (!file_exists($path)) {
        echo "$file - NOT FOUND\n";
        continue;
    }
    $content = file_get_contents($path);
    
    // Check if CTA already included
    if (strpos($content, "diagnostics-cta.cta") !== false) {
        echo "$file - CTA already present\n";
        continue;
    }
    
    // Add CTA before footer
    $content = str_replace("@include('components.footer')", "@include('components.diagnostics-cta.cta')\n@include('components.footer')", $content);
    file_put_contents($path, $content);
    echo "$file - CTA ADDED\n";
}
