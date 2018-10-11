<?php

include __DIR__."/../../bootstrap.php";

use \rpman\Models\HttpRequest;

//get http data from post content
$http = new HttpRequest();
$http->getContent();
