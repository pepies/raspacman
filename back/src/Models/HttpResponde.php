<?php namespace rpman\Models;

/**
 * Get content from http post
 * @Observable - If this is changed notify Storage
 */
class HttpResponse
{
    /**
     * Sending content to game
     *
     * @var json
     */
    private $response;
     
    public function response(json $data)
    {
        echo $data;
    }
}
