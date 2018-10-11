<?php
namespace rpman\objects;

/**
 * Get content from http post
 * @Observable
 */
class Http implements IObservable
{
    /**
     * Recieving content as Array from creator
     *
     * @var Array
     */
    private $content;

    /**
     * Sending content to game
     *
     * @var json
     */
    private $response;

    public function __construct()
    {
        header("Access-Control-Allow-Headers: Content-Type,Authorization");
        header("Access-Control-Allow-Methods: POST, OPTIONS");
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
        //let frontend know that its succesfull request
        print json_encode($_POST);
        $this->content = $_POST;
    }

    public function setResponse()
    {
    }

    protected function getResponse()
    {
    }
}
