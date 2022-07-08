<?php

namespace Qdequippe\SilaePhpSdk\Type;

class ProprietesChiffrement
{
    /**
     * @var string
     */
    private $Cle;

    /**
     * @var string
     */
    private $AlgorithmeSymetrique;

    /**
     * @return string
     */
    public function getCle()
    {
        return $this->Cle;
    }

    /**
     * @param string $Cle
     * @return ProprietesChiffrement
     */
    public function withCle($Cle)
    {
        $new = clone $this;
        $new->Cle = $Cle;

        return $new;
    }

    /**
     * @return string
     */
    public function getAlgorithmeSymetrique()
    {
        return $this->AlgorithmeSymetrique;
    }

    /**
     * @param string $AlgorithmeSymetrique
     * @return ProprietesChiffrement
     */
    public function withAlgorithmeSymetrique($AlgorithmeSymetrique)
    {
        $new = clone $this;
        $new->AlgorithmeSymetrique = $AlgorithmeSymetrique;

        return $new;
    }
}

