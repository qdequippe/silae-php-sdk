<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSPeriodeActivite
{
    /**
     * @var \DateTimeInterface
     */
    private $DateDebut;

    /**
     * @var \DateTimeInterface
     */
    private $DateFin;

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebut()
    {
        return $this->DateDebut;
    }

    /**
     * @param \DateTimeInterface $DateDebut
     * @return CPAISWSPeriodeActivite
     */
    public function withDateDebut($DateDebut)
    {
        $new = clone $this;
        $new->DateDebut = $DateDebut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateFin()
    {
        return $this->DateFin;
    }

    /**
     * @param \DateTimeInterface $DateFin
     * @return CPAISWSPeriodeActivite
     */
    public function withDateFin($DateFin)
    {
        $new = clone $this;
        $new->DateFin = $DateFin;

        return $new;
    }
}

