<?php

include __DIR__."/../../bootstrap.php";

use \rpman\Models\HttpRequest;
use \rpman\Models\Storage;

//get http data from post content
$http = new HttpRequest();
$levelArray = $http->getContent();

$storage = new Storage();
$storage->store($level);
