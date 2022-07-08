<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSEffectifEtablissement
{
    /**
     * @var \DateTimeInterface
     */
    private $Annee;

    /**
     * @var float
     */
    private $EffectifCT;

    /**
     * @return \DateTimeInterface
     */
    public function getAnnee()
    {
        return $this->Annee;
    }

    /**
     * @param \DateTimeInterface $Annee
     * @return CPAISWSEffectifEtablissement
     */
    public function withAnnee($Annee)
    {
        $new = clone $this;
        $new->Annee = $Annee;

        return $new;
    }

    /**
     * @return float
     */
    public function getEffectifCT()
    {
        return $this->EffectifCT;
    }

    /**
     * @param float $EffectifCT
     * @return CPAISWSEffectifEtablissement
     */
    public function withEffectifCT($EffectifCT)
    {
        $new = clone $this;
        $new->EffectifCT = $EffectifCT;

        return $new;
    }
}

