<?php
$filePath = 'c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/test-page.blade.php';
$content = file_get_contents($filePath);

// 1. Add process-explained after cbc-results-section
$resultsEndToken = "    </style>\n    @endif\n\n    @if(\$testPage->service && \$testPage->service->faqs";
$processExplainedInclude = "    </style>\n    @endif\n\n    @include('components.process-explained')\n\n    @if(\$testPage->service && \$testPage->service->faqs";

$content = str_replace($resultsEndToken, $processExplainedInclude, $content);

// 2. Add diagnostics-cta.cta before footer (if it's not already there)
$footerIncludeToken = "    @include('components.footer')";
$ctaFooterInclude = "    @include('components.diagnostics-cta.cta')\n    @include('components.footer')";

if (strpos($content, "@include('components.diagnostics-cta.cta')") === false) {
    $content = str_replace($footerIncludeToken, $ctaFooterInclude, $content);
}

file_put_contents($filePath, $content);
echo "Includes injected successfully.\n";
