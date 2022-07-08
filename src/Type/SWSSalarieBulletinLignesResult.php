<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalarieBulletinLignesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletinLignes
     */
    private $SalarieLignesBulletin;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletinLignes
     */
    public function getSalarieLignesBulletin()
    {
        return $this->SalarieLignesBulletin;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSReponseSalarieBulletinLignes $SalarieLignesBulletin
     * @return SWSSalarieBulletinLignesResult
     */
    public function withSalarieLignesBulletin($SalarieLignesBulletin)
    {
        $new = clone $this;
        $new->SalarieLignesBulletin = $SalarieLignesBulletin;

        return $new;
    }
}

