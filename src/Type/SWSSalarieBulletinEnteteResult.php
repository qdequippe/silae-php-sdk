<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalarieBulletinEnteteResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletinEntete
     */
    private $SalarieEnteteBulletin;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletinEntete
     */
    public function getSalarieEnteteBulletin()
    {
        return $this->SalarieEnteteBulletin;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletinEntete $SalarieEnteteBulletin
     * @return SWSSalarieBulletinEnteteResult
     */
    public function withSalarieEnteteBulletin($SalarieEnteteBulletin)
    {
        $new = clone $this;
        $new->SalarieEnteteBulletin = $SalarieEnteteBulletin;

        return $new;
    }
}

