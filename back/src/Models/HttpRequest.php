<?php namespace rpman\Models;

/**
 * Get content from http post
 * Instance must be created before any conten is printed
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
            die("Post content is not array: "+gettype($_POST));
        }
        $this->content = $_POST;
        //let creator know that is a succesfull request
        print json_encode($this->content);
    }
}
