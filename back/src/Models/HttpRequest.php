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
        //let frontend know that is a succesfull request
        print json_encode($_POST);
        $this->content = $_POST;
    }
}
