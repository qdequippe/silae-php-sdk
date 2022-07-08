<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSControlerBulletinsPeriodeResult
{
    /**
     * @var int
     */
    private $NbBulletinsControles;

    /**
     * @return int
     */
    public function getNbBulletinsControles()
    {
        return $this->NbBulletinsControles;
    }

    /**
     * @param int $NbBulletinsControles
     * @return SWSControlerBulletinsPeriodeResult
     */
    public function withNbBulletinsControles($NbBulletinsControles)
    {
        $new = clone $this;
        $new->NbBulletinsControles = $NbBulletinsControles;

        return $new;
    }
}

