<?php

include __DIR__."/../../bootstrap.php";

use \rpman\Models\HttpRequest;
use \rpman\Models\Storage;
use \rpman\Models\Parse;

$levelArray = (new HttpRequest())->getContent();
$lvlObj = (new Parse($levelArray))->toLevelObject();
// $isStored = (new Storage())->store($levelObj);
