<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSTaxeTransport
{
    /**
     * @var \DateTimeInterface
     */
    private $MoisDebut;

    /**
     * @var float
     */
    private $PourcentageAbattement;

    /**
     * @return \DateTimeInterface
     */
    public function getMoisDebut()
    {
        return $this->MoisDebut;
    }

    /**
     * @param \DateTimeInterface $MoisDebut
     * @return CPAISWSTaxeTransport
     */
    public function withMoisDebut($MoisDebut)
    {
        $new = clone $this;
        $new->MoisDebut = $MoisDebut;

        return $new;
    }

    /**
     * @return float
     */
    public function getPourcentageAbattement()
    {
        return $this->PourcentageAbattement;
    }

    /**
     * @param float $PourcentageAbattement
     * @return CPAISWSTaxeTransport
     */
    public function withPourcentageAbattement($PourcentageAbattement)
    {
        $new = clone $this;
        $new->PourcentageAbattement = $PourcentageAbattement;

        return $new;
    }
}

