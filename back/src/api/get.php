<?php

include __DIR__."/../../bootstrap.php";

use \rpman\Models\Services\HttpResponse;
use \rpman\Models\Services\Storage;
use \rpman\Models\Services\Parser;

$storage    = new Storage();
$parser     = new Parser();
$fetched    = $storage->getRandomLevel();
$json       = $parser->parseRepo($fetched)->toJson();
$response   = HttpResponse::response($json);
