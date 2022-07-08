<?php

namespace Qdequippe\SilaePhpSdk\Type;

class BaseTaux
{
    /**
     * @var float
     */
    private $base;

    /**
     * @var float
     */
    private $taux;

    /**
     * @return float
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param float $base
     * @return BaseTaux
     */
    public function withBase($base)
    {
        $new = clone $this;
        $new->base = $base;

        return $new;
    }

    /**
     * @return float
     */
    public function getTaux()
    {
        return $this->taux;
    }

    /**
     * @param float $taux
     * @return BaseTaux
     */
    public function withTaux($taux)
    {
        $new = clone $this;
        $new->taux = $taux;

        return $new;
    }
}

