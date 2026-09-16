<?php
$filePath = 'c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/cbc-test.blade.php';
$content = file_get_contents($filePath);

// 1. Swap Components and Specimen
$specimenStart = strpos($content, "<!-- Specimen and Preparation Section -->");
$specimenStyleEnd = strpos($content, "</style>", $specimenStart);
$specimenEnd = strpos($content, "</section>", $specimenStyleEnd) + 10;
if (strpos(substr($content, $specimenStyleEnd, 200), "</style>") !== false) {
    // wait, <style> ends AFTER </section>.
}
$specimenBlock = "";

// Actually, I can just use the same script logic I used on test-page.blade.php!
// Wait, `cbc-test.blade.php` doesn't have `@if($testPage->specimen_title)` etc. It has hardcoded text.
// Let's copy the entire `test-page.blade.php` content over `cbc-test.blade.php`?
// No, the user wants `cbc-test.blade.php` to look like this, but if we copy `test-page.blade.php` over it, it will fail because `$testPage` variable is not passed to the view in `routes/web.php`.
