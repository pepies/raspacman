<?php namespace rpman\Models\Services;

use rpman\Models\Entities\Level;
use rpman\Models\Entities\Coin;
use rpman\Models\Entities\Monster;
use rpman\Models\Entities\Line;
use rpman\Models\Entities\Diamond;
use rpman\Models\Entities\Character;

/**
 * Parse array to Level Object
 * Iam not really sure if this class follows Single Resposibility Principle
 */
class ParserFromHttp
{
    private $level;

    private $plainArray;

    public function __construct(array $httpResArray)
    {
        //TODO: test if I really have expected array format
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
        $this->level = $this->importCharacterToLevel(
            $this->plainArray['start'],
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

    private function importCharacterToLevel(array $character, Level $level): Level
    {
        $level->setCharacter($character['x'], $character['y']);
        return $level;
    }
}
