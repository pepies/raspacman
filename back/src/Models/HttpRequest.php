<?php namespace rpman\Models;

/**
 * Get content from http post
 * Instance must be created before any content is printed
 */
class HttpRequest
{
    /**
     * Recieving content as Array from creator
     *
     * @var Array
     */
    private $content;

    public function __construct()
    {
        header("Access-Control-Allow-Headers: Content-Type,Authorization");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Origin: *");
        if (!is_array($_POST)) {
            die("Post content is not an array: "+gettype($_POST));
        }
        $this->content = $_POST;
        //let frontend creator know that is a succesfull request
        print json_encode($this->content);
    }

    /**
    * Gets array recived by POST http request
    *
    * @return Array
    */
    public function getContent(): ?array
    {
        return $this->$content;
    }
}
