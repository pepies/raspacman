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
        $this->getContent();
    }

    /**
     * Gets level as php object from http post
     *
     * @return void
     */
    private function getContent()
    {
        return (object)$_POST;
    }
}
new \API\Create();
