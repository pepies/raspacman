<?php namespace rpman\Models\Services;

/**
 * Get content from http post
 * Instance must be created before any content is printed or this alredy called
 * MAYBE IMPLEMENT THIS AS SINGLETON and Observable? - Iam not really sure
 */
class HttpRequest
{
    /**
     * Recieving content as Array from creator
     *EXPECT format as:
     * array (
     *     'priserky' =>
     *     array (
     *         0 =>
     *         array (
     *         'dx' => '1',
     *         'dy' => '1',
     *         'x' => '425',
     *         'y' => '579',
     *         'pohlad' => '0',
     *         'typ' => '1',
     *         'direction' => 'down',
     *         'change_direction' => 'undefined',
     *         ),
     *         1 =>...
     *     ),
     *     'coiny' =>
     *     array (
     *         0 =>
     *         array (
     *         'x' => '756',
     *         'y' => '558',
     *         'active' => 'true',
     *         ),...
     *     ),
     *     'diamanty' =>
     *     array (
     *         0 =>
     *         array (
     *         'x' => '615',
     *         'y' => '544',
     *         'active' => 'true',
     *         ),...
     *     ),
     *     'ciarky' =>
     *     array (
     *         0 =>
     *         array (
     *         'zac_x' => '0',
     *         'zac_y' => '600',
     *         'end_x' => '1200',
     *         'end_y' => '5',
     *         ),
     *         1 =>...
     *     ),
     *     'start' =>
     *     array (
     *         'x' => '35',
     *         'y' => '50',
     *     ),
     *     )
     * @var Array
     */
    private static $content;

    /**
    * Gets array recived by POST http request
    *
    * @return Array
    */
    public static function getContent(): ?array
    {
        if (!headers_sent()) {
            header("Access-Control-Allow-Headers: Content-Type,Authorization");
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
            header("Access-Control-Allow-Origin: *");
            if (!is_array($_POST) || null) {
                die("Post content is not an array: ".gettype($_POST));
            }
            self::$content = $_POST;
            //let frontend creator know that is a succesfull request
            // var_export($this::$content);
            print json_encode(self::$content);
        }
        return self::$content;
    }
}
