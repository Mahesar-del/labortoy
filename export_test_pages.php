<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\DB;

$pages = DB::table('test_pages')->get();
$components = DB::table('test_page_components')->get();
$results = DB::table('test_page_results')->get();
$faqs = DB::table('service_faqs')->get();
$tests = DB::table('tests')->get();

$export = "<?php\n";
$export .= "require 'vendor/autoload.php';\n";
$export .= "\$app = require_once 'bootstrap/app.php';\n";
$export .= "\$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();\n\n";
$export .= "use Illuminate\Support\Facades\DB;\n\n";

$export .= "DB::statement('SET FOREIGN_KEY_CHECKS=0;');\n";
$export .= "DB::table('test_page_results')->truncate();\n";
$export .= "DB::table('test_page_components')->truncate();\n";
$export .= "DB::table('test_pages')->truncate();\n";
$export .= "DB::table('service_faqs')->truncate();\n";
$export .= "DB::table('tests')->truncate();\n";
$export .= "DB::statement('SET FOREIGN_KEY_CHECKS=1;');\n\n";

$export .= "\$pages = " . var_export($pages->toArray(), true) . ";\n";
$export .= "foreach(\$pages as \$p) { DB::table('test_pages')->insert((array)\$p); }\n\n";

$export .= "\$components = " . var_export($components->toArray(), true) . ";\n";
$export .= "foreach(\$components as \$c) { DB::table('test_page_components')->insert((array)\$c); }\n\n";

$export .= "\$results = " . var_export($results->toArray(), true) . ";\n";
$export .= "foreach(\$results as \$r) { DB::table('test_page_results')->insert((array)\$r); }\n\n";

$export .= "\$faqs = " . var_export($faqs->toArray(), true) . ";\n";
$export .= "foreach(\$faqs as \$f) { DB::table('service_faqs')->insert((array)\$f); }\n\n";

$export .= "\$tests = " . var_export($tests->toArray(), true) . ";\n";
$export .= "foreach(\$tests as \$t) { DB::table('tests')->insert((array)\$t); }\n\n";

$export .= "echo 'Database synchronized successfully!';\n";

file_put_contents('sync_test_pages.php', $export);
echo "Exported to sync_test_pages.php\n";
