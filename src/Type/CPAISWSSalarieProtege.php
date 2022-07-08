<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieProtege
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
     * @var string
     */
    private $CodeProtection;

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebut()
    {
        return $this->DateDebut;
    }

    /**
     * @param \DateTimeInterface $DateDebut
     * @return CPAISWSSalarieProtege
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
     * @return CPAISWSSalarieProtege
     */
    public function withDateFin($DateFin)
    {
        $new = clone $this;
        $new->DateFin = $DateFin;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeProtection()
    {
        return $this->CodeProtection;
    }

    /**
     * @param string $CodeProtection
     * @return CPAISWSSalarieProtege
     */
    public function withCodeProtection($CodeProtection)
    {
        $new = clone $this;
        $new->CodeProtection = $CodeProtection;

        return $new;
    }
}

