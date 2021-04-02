<?php
include "./vendor/autoload.php";

use \PhpOffice\PhpWord\{TemplateProcessor};

$templateProcessor = new TemplateProcessor('Template.docx');

$familia = $_POST['familia'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$address = $_POST['address'];

$templateProcessor->setValue('familia', $familia);
$templateProcessor->setValue('name', $name);
$templateProcessor->setValue('patronymic', $patronymic);
$templateProcessor->setValue('address', $address);

$templateProcessor->saveAs('result.docx');


echo json_encode(['test' => true]);
