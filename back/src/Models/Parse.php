<?php namespace rpman\Models;

final class Parse
{
    /*EXPECT:
    {
        "priserky":[
            {
                "dx":"1",
                "dy":"1",
                "x":"370",
                "y":"342",
                "pohlad":"1",
                "typ":"2",
                "direction":"up",
                "change_direction":"undefined"
            },...
        ],
        "coiny":[
            {
                "x":"674",
                "y":"510",
                "active":"true"
            },...
        ],
        "diamanty":[
            {
                "x":"529",
                "y":"496",
                "active":"true"
            },...
        ],
        "ciarky":[
            {
                "zac_x":"0",
                "zac_y":"600",
                "end_x":"1200",
                "end_y":"5"
            },...
        ],
        "start":{
            "x":"429",
            "y":"436"
        }
        }
    */
    private $httpResponse;

    public function __construct(array $httpResponse)
    {
        $this->httpResponse = $httpResponse;
        var_dump($this->arrayOfCoins($httpResponse));
    }

    public function toLevelObject(): Level
    {
        return $levelObj;
    }

    private function arrayOfCoins(array $httpResponse): array
    {
        return \json_decode($httpResponse['coiny']);
    }
}
