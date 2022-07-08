<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSConfirmationPeriode
{
    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var bool
     */
    private $PrimesConfirmeePourMoi;

    /**
     * @var bool
     */
    private $PrimesConfirmeeGlobalement;

    /**
     * @var bool
     */
    private $HeuresConfirmeeGlobalement;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSConfirmationPeriode
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPrimesConfirmeePourMoi()
    {
        return $this->PrimesConfirmeePourMoi;
    }

    /**
     * @param bool $PrimesConfirmeePourMoi
     * @return CPAISWSConfirmationPeriode
     */
    public function withPrimesConfirmeePourMoi($PrimesConfirmeePourMoi)
    {
        $new = clone $this;
        $new->PrimesConfirmeePourMoi = $PrimesConfirmeePourMoi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPrimesConfirmeeGlobalement()
    {
        return $this->PrimesConfirmeeGlobalement;
    }

    /**
     * @param bool $PrimesConfirmeeGlobalement
     * @return CPAISWSConfirmationPeriode
     */
    public function withPrimesConfirmeeGlobalement($PrimesConfirmeeGlobalement)
    {
        $new = clone $this;
        $new->PrimesConfirmeeGlobalement = $PrimesConfirmeeGlobalement;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHeuresConfirmeeGlobalement()
    {
        return $this->HeuresConfirmeeGlobalement;
    }

    /**
     * @param bool $HeuresConfirmeeGlobalement
     * @return CPAISWSConfirmationPeriode
     */
    public function withHeuresConfirmeeGlobalement($HeuresConfirmeeGlobalement)
    {
        $new = clone $this;
        $new->HeuresConfirmeeGlobalement = $HeuresConfirmeeGlobalement;

        return $new;
    }
}

