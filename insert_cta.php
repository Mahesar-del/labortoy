<?php
$filePath = 'c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/test-page.blade.php';
$content = file_get_contents($filePath);

$footerIncludeToken = "    @include('components.footer')";
$ctaFooterInclude = "    @include('components.diagnostics-cta.cta')\n    @include('components.footer')";

if (strpos($content, "@include('components.diagnostics-cta.cta')") === false) {
    $content = str_replace($footerIncludeToken, $ctaFooterInclude, $content);
    file_put_contents($filePath, $content);
    echo "CTA inserted successfully.\n";
} else {
    echo "CTA already present.\n";
}
