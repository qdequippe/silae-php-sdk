<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalarieRecupererPeriodeDernierBulletinCalculeResult
{
    /**
     * @var \DateTimeInterface
     */
    private $PeriodeDernierBulletinCalcule;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeDernierBulletinCalcule()
    {
        return $this->PeriodeDernierBulletinCalcule;
    }

    /**
     * @param \DateTimeInterface $PeriodeDernierBulletinCalcule
     * @return SWSSalarieRecupererPeriodeDernierBulletinCalculeResult
     */
    public function withPeriodeDernierBulletinCalcule($PeriodeDernierBulletinCalcule)
    {
        $new = clone $this;
        $new->PeriodeDernierBulletinCalcule = $PeriodeDernierBulletinCalcule;

        return $new;
    }
}

