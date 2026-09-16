<?php
$filePath = 'c:/Users/DELL/Desktop/labortory/laravel/resources/views/services/test-page.blade.php';
$content = file_get_contents($filePath);

// Step 1: Remove it from its current location
$includeString = "    @include('components.process-explained')\n\n";
$content = str_replace($includeString, "", $content);

// In case it was added without newlines or slightly different whitespace
$content = preg_replace("/\s*@include\('components\.process-explained'\)\s*/", "\n\n", $content);

// Step 2: Add it after the Specimen and Preparation section
// The Specimen and Preparation section ends with:
//         }
//     </style>
//     @endif
// 
//     @if($testPage->results && $testPage->results->count())

$specimenEndToken = "    </style>\n    @endif\n\n    @if(\$testPage->results && \$testPage->results->count())";
$newSpecimenEndToken = "    </style>\n    @endif\n\n    @include('components.process-explained')\n\n    @if(\$testPage->results && \$testPage->results->count())";

$content = str_replace($specimenEndToken, $newSpecimenEndToken, $content);

file_put_contents($filePath, $content);
echo "Process Explained section moved successfully.\n";
