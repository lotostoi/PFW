<?php
include "./vendor/autoload.php";

use \PhpOffice\PhpWord\{TemplateProcessor};

$templateProcessor = new TemplateProcessor('Template.docx');

$templateProcessor->setValue('firstname', 'John');
$templateProcessor->setValue('${lastname}', 'Test');

$templateProcessor->saveAs('result.docx');


echo json_encode(['test' => true]);
