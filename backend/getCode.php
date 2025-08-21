<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$codeDir = __DIR__ . "/../codes";  // ✅ fixed path
$files = array_diff(scandir($codeDir), ['.', '..']);

$result = [];
foreach ($files as $file) {
    if (pathinfo($file, PATHINFO_EXTENSION) === "php") {
        $result[] = [
            "name" => $file,
            "content" => file_get_contents($codeDir . "/" . $file)
        ];
    }
}

echo json_encode([
    "count" => count($result),
    "codes" => $result
]);
