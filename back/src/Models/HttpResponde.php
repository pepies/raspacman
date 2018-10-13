<?php namespace rpman\Models;

/**
 * Get content from http post
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
        die($this->$response = $data);
    }
}
