<?php namespace rpman\Models;

use rpman\Models\Level\Level;
use rpman\Models\Level\Coin;
use rpman\Models\Level\Monster;
use rpman\Models\Level\Line;
use rpman\Models\Level\Diamond;
use rpman\Models\Level\Character;

/**
 * Parse array to Level Object
 * Iam not really sure if this class follows Single Resposibility Principle
 */
class Parse
{
    /*EXPECT httpResponse format as:
    array (
        'priserky' =>
        array (
            0 =>
            array (
            'dx' => '1',
            'dy' => '1',
            'x' => '425',
            'y' => '579',
            'pohlad' => '0',
            'typ' => '1',
            'direction' => 'down',
            'change_direction' => 'undefined',
            ),
            1 =>...
        ),
        'coiny' =>
        array (
            0 =>
            array (
            'x' => '756',
            'y' => '558',
            'active' => 'true',
            ),...
        ),
        'diamanty' =>
        array (
            0 =>
            array (
            'x' => '615',
            'y' => '544',
            'active' => 'true',
            ),...
        ),
        'ciarky' =>
        array (
            0 =>
            array (
            'zac_x' => '0',
            'zac_y' => '600',
            'end_x' => '1200',
            'end_y' => '5',
            ),
            1 =>...
        ),
        'start' =>
        array (
            'x' => '35',
            'y' => '50',
        ),
        )
    */
    private $level;

    private $plainArray;

    public function __construct(array $httpResArray)
    {
        $this->plainArray = $httpResArray;
        $this->level = new Level();
    }
    
    public function toLevelObject(): Level
    {
        $this->level = $this->importMonstersToLevel(
            $this->plainArray['priserky'],
            $this->level
        );

        $this->level = $this->importCoinsToLevel(
            $this->plainArray['coiny'],
            $this->level
        );

        $this->level = $this->importDiamondsToLevel(
            $this->plainArray['diamanty'],
            $this->level
        );
        $this->level = $this->importLinesToLevel(
            $this->plainArray['ciarky'],
            $this->level
        );
        $this->level = $this->importCoinsToLevel(
            $this->plainArray['coiny'],
            $this->level
        );
        
        return $this->level;
    }

    /**
     * Parse array of coins data to level with coins
     *
     * @param array $monsters
     * @param Level $level
     * @return Level
     */
    private function importMonstersToLevel(array $monsters, Level $level): Level
    {
        foreach ($monsters as $monster) {
            $monster = new Monster(
                $monster['x'],
                $monster['y'],
                $monster['direction']
            );
            $level->addMonster($monster);
        }
        return $level;
    }

    private function importCoinsToLevel(array $coins, Level $level): Level
    {
        foreach ($coins as $coin) {
            $level->addCoin(new Coin($coin['x'], $coin['y']));
        }
        return $level;
    }

    private function importDiamondsToLevel(array $diamonds, Level $level): Level
    {
        foreach ($diamonds as $diamond) {
            $level->addDiamond(new Diamond($diamond['x'], $diamond['y']));
        }
        return $level;
    }

    private function importLinesToLevel(array $lines, Level $level): Level
    {
        foreach ($lines as $line) {
            $line = new Line(
                $line['zac_x'],
                $line['zac_y'],
                $line['end_x'],
                $line['end_y']
            );
            $level->addLine($line);
        }
        return $level;
    }

    private function setCharacter(array $character, Level $level): Level
    {
        $level->setCharacter($character['x'], $character['y']);
        return $level;
    }
}
