<?php
$dir = 'c:/Users/DELL/Desktop/labortory/laravel/resources/views/';
$files = glob($dir . 'admin-*.blade.php');

$testLink = "<a href=\"{{ route('admin.tests.index') }}\"><svg viewBox=\"0 0 24 24\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"/><polyline points=\"14 2 14 8 20 8\"/><line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"/><line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"/><polyline points=\"10 9 9 9 8 9\"/></svg><span>Tests</span></a>";
$testPagesLink = "<a href=\"{{ route('admin.test-pages.index') }}\"><svg viewBox=\"0 0 24 24\"><path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"/><polyline points=\"14 2 14 8 20 8\"/><line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"/><line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"/><polyline points=\"10 9 9 9 8 9\"/></svg><span>Test Pages</span></a>";

foreach ($files as $f) {
    $content = file_get_contents($f);
    if (strpos($content, "route('admin.test-pages.index')") === false) {
        $content = str_replace($testLink, $testLink . $testPagesLink, $content);
        file_put_contents($f, $content);
        echo "Fixed " . basename($f) . "\n";
    }
}
