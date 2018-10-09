<?php
// Author: Peter Brecska
// My lightweight REST API mailer

header("Access-Control-Allow-Headers: Content-Type,Authorization");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Origin: *");

class WriteMeSomeApiButFast
{

    public function __construct(){
        //$this->loadUrlParams();
        $this->loadGetParams();

        //The strongest auth world ever seen ^.^
        if($_SERVER['HTTP_AUTHORIZATION'] == "KodimAbySomUzivilRodinu"){
            $this->mailToMe();
        }else{
            echo "401 - Unauthorized";
        }
    }

    private $message;

    /**
    * This is called only for ulr testing API
    *
    * @return json
    */
    private function loadUrlParams(){
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        $this->json = $query['json'];
    return $this->json;
    }

    /**
    * Get params that were send from client
    *
    * @return null
    */
    private function loadGetParams(){
        # Get JSON as a string
        $json_str = file_get_contents('php://input');
        $this->message = json_decode($json_str);
    return null;
    }
    
    private function mailToMe(){ 
        if(isset($this->message)){
            if(mail ( "peter@brecska.sk" , "New mail from my website" ,  $this->message->text."\n ---- \n When: ".$this->message->when."\n ---- \n Contact:".$this->message->contact)){
                echo $this->message;
            }else{
                echo "400 - NOT SEND";
            }
        }
    }
}
new WriteMeSomeApiButFast();
?>
