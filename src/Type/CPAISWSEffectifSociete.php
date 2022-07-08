<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSEffectifSociete
{
    /**
     * @var \DateTimeInterface
     */
    private $Annee;

    /**
     * @var float
     */
    private $Effectif1_GlobalURSSAF;

    /**
     * @var float
     */
    private $Effectif2_MoyenURSAFF;

    /**
     * @var float
     */
    private $Effectif_DADSU;

    /**
     * @return \DateTimeInterface
     */
    public function getAnnee()
    {
        return $this->Annee;
    }

    /**
     * @param \DateTimeInterface $Annee
     * @return CPAISWSEffectifSociete
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
    public function getEffectif1_GlobalURSSAF()
    {
        return $this->Effectif1_GlobalURSSAF;
    }

    /**
     * @param float $Effectif1_GlobalURSSAF
     * @return CPAISWSEffectifSociete
     */
    public function withEffectif1_GlobalURSSAF($Effectif1_GlobalURSSAF)
    {
        $new = clone $this;
        $new->Effectif1_GlobalURSSAF = $Effectif1_GlobalURSSAF;

        return $new;
    }

    /**
     * @return float
     */
    public function getEffectif2_MoyenURSAFF()
    {
        return $this->Effectif2_MoyenURSAFF;
    }

    /**
     * @param float $Effectif2_MoyenURSAFF
     * @return CPAISWSEffectifSociete
     */
    public function withEffectif2_MoyenURSAFF($Effectif2_MoyenURSAFF)
    {
        $new = clone $this;
        $new->Effectif2_MoyenURSAFF = $Effectif2_MoyenURSAFF;

        return $new;
    }

    /**
     * @return float
     */
    public function getEffectif_DADSU()
    {
        return $this->Effectif_DADSU;
    }

    /**
     * @param float $Effectif_DADSU
     * @return CPAISWSEffectifSociete
     */
    public function withEffectif_DADSU($Effectif_DADSU)
    {
        $new = clone $this;
        $new->Effectif_DADSU = $Effectif_DADSU;

        return $new;
    }
}

