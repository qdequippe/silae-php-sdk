<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CVacancesScolairesZone
{
    /**
     * @var string
     */
    private $Zone;

    /**
     * @var \DateTimeInterface
     */
    private $Debut;

    /**
     * @var \DateTimeInterface
     */
    private $Fin;

    /**
     * @return string
     */
    public function getZone()
    {
        return $this->Zone;
    }

    /**
     * @param string $Zone
     * @return CVacancesScolairesZone
     */
    public function withZone($Zone)
    {
        $new = clone $this;
        $new->Zone = $Zone;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDebut()
    {
        return $this->Debut;
    }

    /**
     * @param \DateTimeInterface $Debut
     * @return CVacancesScolairesZone
     */
    public function withDebut($Debut)
    {
        $new = clone $this;
        $new->Debut = $Debut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getFin()
    {
        return $this->Fin;
    }

    /**
     * @param \DateTimeInterface $Fin
     * @return CVacancesScolairesZone
     */
    public function withFin($Fin)
    {
        $new = clone $this;
        $new->Fin = $Fin;

        return $new;
    }
}

