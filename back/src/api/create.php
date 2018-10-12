<?php

include __DIR__."/../../bootstrap.php";

use \rpman\Models\HttpRequest;
use \rpman\Models\Storage;
use \rpman\Models\Parse;

//get http data from post content
$http = new HttpRequest();
$levelArray = $http->getContent();

//parse array to Level object
$Array = new Parse($levelArray);
// $Array->toLevelObject();
//store it
// $storage = new Storage();
// $storage->store($level);
