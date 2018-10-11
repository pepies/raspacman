<?php
namespace API;

/**
 * Get content from http post
 */
class Create
{
    private $content;

    public function __construct()
    {
        /* HTTP config headers */
        header("Access-Control-Allow-Headers: Content-Type,Authorization");
        header("Access-Control-Allow-Methods: POST, OPTIONS");
        header("Access-Control-Allow-Origin: *");
        var_dump($this->getContent());
    }

    /**
     * Gets level as json object from http post
     *
     * @return void
     */
    private function getContent()
    {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
        $url = $protocol . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        return $parts;
    }
}
new \API\Create();
