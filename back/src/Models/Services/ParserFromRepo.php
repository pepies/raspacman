<?php namespace rpman\Models\Services;

use rpman\Models\Entities\Level as Level;

class ParserFromRepo
{
    private $level;

    public function __construct(array $level)
    {
        $this->level = $level;
    }

    public function toJson(): string
    {
        $json = json_encode($this->level);
        return $json;
    }

    public function toObject() :Level
    {
        $object = (object)$this->level;
        return $object;
    }
}
