<?php

namespace rpman\Repositories;

/**
 * rpman/Repositories/LevelRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LevelRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Get one object(sql row) as array
     *
     * @return array
     */
    public function getRandomLevelAsArray(): array
    {
        $maxid = "SELECT MAX(lvl.id) FROM rpman\Models\Entities\Level lvl";
        $query = $this->getEntityManager()->createQuery($maxid);
        $maxid = (int)$query->getSingleResult()[1];

        $id = rand(1, $maxid);
        $dql = "SELECT lvl, ch, l, m, d, c 
                FROM rpman\Models\Entities\Level lvl
                JOIN lvl.character ch
                JOIN lvl.lines l
                JOIN lvl.monsters m
                JOIN lvl.diamonds d
                JOIN lvl.coins c
                WHERE lvl.id = ?1";
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter(1, $id);
        $level = $query->getArrayResult();
        if (empty($level)) { //recursivly looks for existing level
            $level = $this->getRandomLevelAsArray();
        }
        return $level;
    }
}