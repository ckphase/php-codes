<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if (!isset($_GET['file'])) {
    echo json_encode(["error" => "No file selected"]);
    exit;
}

$fileName = basename($_GET['file']); // prevent directory traversal
$codeDir = __DIR__ . "/../codes";    // codes folder (next to backend)
$filePath = $codeDir . DIRECTORY_SEPARATOR . $fileName;

if (!file_exists($filePath)) {
    echo json_encode([
        "error" => "File not found",
        "debug_dir" => $codeDir,
        "expected_file" => $fileName,
        "full_path" => $filePath
    ]);
    exit;
}

// run the PHP file and capture output
ob_start();
include($filePath);
$output = ob_get_clean();

echo json_encode([
    "file" => $fileName,
    "output" => $output
]);
