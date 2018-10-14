<?php

include __DIR__."/../../bootstrap.php";

use \rpman\Models\Services\HttpRequest;
use \rpman\Models\Services\Storage;

$content    = HttpRequest()::getContent();
$parser     = new Parser();
$levelObj   = $parser->parseHttp($content)->toLevelObject();
(new Storage())->store($levelObj);
