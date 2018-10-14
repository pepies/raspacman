<?php namespace rpman\Models\Services;

/**
 * Get content from http post
 */
class HttpResponse
{
    public static function response(string $data)
    {
        if (!headers_sent()) {
            header('Content-type: application/json');
            header("Access-Control-Allow-Headers: Content-Type,Authorization");
            header("Access-Control-Allow-Methods: GET");
            // header("Access-Control-Allow-Origin: *");
            // die($data);
            print $data;
        } else {
            throw new \Exception('Response was alredy sent.');
        }
    }
}
