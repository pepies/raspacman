<?php namespace rpman\Models\Services;

use rpman\Models\Entities\Level as Level;

/**
 * Decoration pattern ? is it?
 * LSP - ParserFromHttp cant be subst. of Parser
 */
class Parser
{
    public function parseHttp(?array $plainHttpRequest)
    {
        if ($plainHttpRequest === null) {
            throw new \Exception("No http content recived");
        }
        return new ParserFromHttp($plainHttpRequest);
    }

    // Better way to overload method arguemnts in PHP ?
    // public function parsePersisted(mixed $persistedObj)
    // {
    //     if ($persistedObj instanceof rpman\Entities\Level) {
    //         return new ParserFromLevel($persistedObj);
    //     } else {
    //         die("I dont know about that type.");
    //     }
    // }

    public function parseRepo(array $persistedLevel)
    {
        return new ParserFromRepo($persistedLevel);
    }
}
