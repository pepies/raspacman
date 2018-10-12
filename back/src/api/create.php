<?php

include __DIR__."/../../bootstrap.php";

use \rpman\Models\HttpRequest;
use \rpman\Models\Storage;

//get http data from post content
$http = new HttpRequest();
$levelArray = $http->getContent();

//parse array to Level object

//store it
// $storage = new Storage();
// $storage->store($level);
