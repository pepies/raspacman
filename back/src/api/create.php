<?php

include __DIR__."/../../bootstrap.php";

use \rpman\Models\Services\HttpRequest;
use \rpman\Models\Services\Storage;
use \rpman\Models\Services\Parser;

//$httpArray = (new HttpRequest())->getContent();
$httpArray = array( 'priserky' => array( 0 => array( 'dx' => '1', 'dy' => '1', 'x' => '425', 'y' => '579', 'pohlad' => '0', 'typ' => '1', 'direction' => 'down', 'change_direction' => 'undefined', ), 1 => array( 'dx' => '1', 'dy' => '1', 'x' => '1000', 'y' => '422', 'pohlad' => '2', 'typ' => '2', 'direction' => 'left', 'change_direction' => 'undefined', ), ), 'coiny' => array( 0 => array( 'x' => '756', 'y' => '558', 'active' => 'true', ), ), 'diamanty' => array( 0 => array( 'x' => '615', 'y' => '544', 'active' => 'true', ), ), 'ciarky' => array( 0 => array( 'zac_x' => '0', 'zac_y' => '600', 'end_x' => '1200', 'end_y' => '5', ), 1 => array( 'zac_x' => '0', 'zac_y' => '0', 'end_x' => '1200', 'end_y' => '5', ), 2 => array( 'zac_x' => '0', 'zac_y' => '0', 'end_x' => '5', 'end_y' => '600', ), 3 => array( 'zac_x' => '1199', 'zac_y' => '0', 'end_x' => '1', 'end_y' => '600', ), 4 => array( 'zac_x' => '887', 'zac_y' => '432', 'end_x' => '-79', 'end_y' => '-44', ), 5 => array( 'zac_x' => '669', 'zac_y' => '261', 'end_x' => '38', 'end_y' => '229', ), ), 'start' => array( 'x' => '35', 'y' => '50', ), );
$parser = new Parser();
$levelObj = $parser->parseHttp($httpArray)->toLevelObject();
$storage = new Storage();
// $storage->store($levelObj);
$fetchedLevel = $storage->getRandomLevel();
 $json = $parser->parseRepo($fetchedLevel)->toJson();
 var_export($json);
// var_export($fetchedLevel->getMonsters()[0]->getX());
// $storage->remove($fetchedLevel);
