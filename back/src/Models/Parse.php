<?php namespace rpman\Models;

class Parse
{
    private $array;

    public function __construct(array $httpResponse)
    {
        $this->toParse = $httpResponse;
    }

    public function toLevelObject(): Level
    {
    }
}
