<?php
namespace API;

/**
 * Get content from http post
 * @Observable
 */
class Create
{
    private $content;

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
    public function getContent(): Array
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
}
new \API\Create();
