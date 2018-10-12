<?php namespace rpman\Models;

/**
 * Get content from http post
 * Instance must be created before any content is printed or this alredy called
 * MAYBE IMPLEMENT THIS AS SINGLETON and Observable? - Iam not really sure
 */
class HttpRequest
{
    /**
     * Recieving content as Array from creator
     *
     * @var Array
     */
    private static $content;

    public function __construct()
    {
        header("Access-Control-Allow-Headers: Content-Type,Authorization");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
        header("Access-Control-Allow-Origin: *");
        $this->setContent();
    }

    /**
    * Gets array recived by POST http request
    *
    * @return Array
    */
    public function getContent(): ?array
    {
        return $this::$content;
    }

    /**
     * Read http response content and sets it to $content
     *
     * @return void
     */
    protected function setContent()
    {
        if (!is_array($_POST) || null) {
            die("Post content is not an array: ".gettype($_POST));
        }
        $this::$content = $_POST;
        //let frontend creator know that is a succesfull request
        var_dump($this::$content);
        // print json_encode($this::$content);
    }
}
