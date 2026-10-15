<?php
/*
* Audiobookshelf on-disk cache progress.
* Talks to Mopidy on localhost. The ABS token stays in mopidy.conf and is not
* read or returned here. Idle when Mopidy is down or nothing is downloading.
*/
header("Content-Type: application/json");
header("Cache-Control: no-store");

$idle = array(
    "active" => false,
    "state" => "idle",
    "book_id" => null,
    "bytes_done" => 0,
    "bytes_total" => null,
    "percent" => null,
);

$context = stream_context_create(array(
    "http" => array(
        "method" => "GET",
        "timeout" => 2,
        "ignore_errors" => true,
    ),
));
$raw = @file_get_contents("http://127.0.0.1:6680/audiobookshelf/cache", false, $context);
$decoded = is_string($raw) ? json_decode($raw, true) : null;
if (!is_array($decoded)) {
    echo json_encode($idle);
    exit;
}

$state = isset($decoded["state"]) ? (string) $decoded["state"] : "idle";
if ($state !== "downloading" && $state !== "done" && $state !== "idle") {
    $state = "idle";
}
$active = !empty($decoded["active"]) && $state === "downloading";

$bookId = null;
if (isset($decoded["book_id"]) && is_string($decoded["book_id"]) && preg_match('/^[A-Za-z0-9_-]{1,128}$/', $decoded["book_id"])) {
    $bookId = $decoded["book_id"];
}

$bytesDone = 0;
if (isset($decoded["bytes_done"]) && is_numeric($decoded["bytes_done"])) {
    $bytesDone = max(0, (int) $decoded["bytes_done"]);
}

$bytesTotal = null;
if (isset($decoded["bytes_total"]) && is_numeric($decoded["bytes_total"]) && (int) $decoded["bytes_total"] > 0) {
    $bytesTotal = (int) $decoded["bytes_total"];
}

$percent = null;
if (array_key_exists("percent", $decoded) && is_numeric($decoded["percent"])) {
    $percent = max(0, min(100, (int) $decoded["percent"]));
}

echo json_encode(array(
    "active" => $active,
    "state" => $active ? "downloading" : $state,
    "book_id" => $bookId,
    "bytes_done" => $bytesDone,
    "bytes_total" => $bytesTotal,
    "percent" => $percent,
));
