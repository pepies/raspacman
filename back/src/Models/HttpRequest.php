<?php namespace rpman\Models;

/**
 * Get content from http post
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
        $this->setContent();
    }

    /**
    * Getter
    *
    * @return Array
    */
    public function getContent(): array
    {
        return $this->$content;
    }

    /**
     * Setter
     *
     * @return void
     */
    protected function setContent()
    {
        if (!is_array($_POST)) {
            die("post is not aray: "+gettype($_POST));
        }
        $this->content = $_POST;
        //let frontend know that is a succesfull request
        print json_encode($_POST);
    }
}
