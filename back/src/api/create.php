<?php

include __DIR__."/../../bootstrap.php";

use \rpman\Models\HttpRequest;
use \rpman\Models\Storage;
use \rpman\Models\Parse;

//get http data from post content
$http = new HttpRequest();
$levelArray = $http->getContent();

//parse array to Level object
$levelObj = Parse($levelArray)::toLevelObject();
//store it
// $storage = new Storage();
// $storage->store($level);
