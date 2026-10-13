<?php
/*
* Search or browse Audiobookshelf books through Mopidy.
* The ABS token stays in mopidy.conf; this endpoint only talks to localhost:6680.
*/
header("Content-Type: application/json");

require_once dirname(__FILE__) . "/../func.php";

$q = isset($_GET["q"]) ? trim($_GET["q"]) : "";

if ($q === "") {
    echo json_encode(absBrowseBooks());
    exit;
}

$search = mopidyJsonRpc("core.library.search", array(
    "query" => array("any" => array($q)),
    "uris" => array("audiobookshelf:"),
));
echo json_encode(absAlbumsFromSearch($search));

function absBrowseBooks() {
    $books = array();
    $root = mopidyJsonRpc("core.library.browse", array("uri" => "audiobookshelf:root"));
    $libraries = isset($root["result"]) ? $root["result"] : array();
    foreach ($libraries as $library) {
        if (!isset($library["uri"]) || (isset($library["type"]) && $library["type"] !== "directory")) {
            continue;
        }
        $listed = mopidyJsonRpc("core.library.browse", array("uri" => $library["uri"]));
        $refs = isset($listed["result"]) ? $listed["result"] : array();
        foreach ($refs as $ref) {
            if (isset($ref["type"]) && $ref["type"] !== "album") {
                continue;
            }
            $books[] = array(
                "uri" => isset($ref["uri"]) ? $ref["uri"] : "",
                "title" => isset($ref["name"]) ? $ref["name"] : "",
                "author" => "",
            );
            if (count($books) >= 100) {
                return array("books" => $books, "truncated" => true);
            }
        }
    }
    return array("books" => $books, "truncated" => false);
}

function absAlbumsFromSearch($search) {
    $books = array();
    if (!isset($search["result"])) {
        return $books;
    }
    $results = $search["result"];
    if (isset($results["albums"])) {
        $results = array($results);
    }
    if (!is_array($results)) {
        return $books;
    }
    foreach ($results as $result) {
        if (!isset($result["albums"]) || !is_array($result["albums"])) {
            continue;
        }
        foreach ($result["albums"] as $album) {
            $author = "";
            if (isset($album["artists"][0]["name"])) {
                $author = $album["artists"][0]["name"];
            }
            $books[] = array(
                "uri" => isset($album["uri"]) ? $album["uri"] : "",
                "title" => isset($album["name"]) ? $album["name"] : "",
                "author" => $author,
            );
        }
    }
    return $books;
}
