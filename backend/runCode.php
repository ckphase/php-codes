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

// Run the PHP file and capture output
ob_start();
include($filePath);
$output = ob_get_clean();

// Return both raw + rendered
echo json_encode([
    "file"      => $fileName,
    "output"    => $output,                    // rendered HTML (for iframe)
    "raw_html"  => htmlspecialchars($output),  // escaped HTML (for debugging)
    "success"   => true
]);
