<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSExtraManifestation
{
    /**
     * @var string
     */
    private $NomInterneEtablissement;

    /**
     * @var string
     */
    private $AxeAnalytique;

    /**
     * @var string
     */
    private $ValeurAxeAnalytique;

    /**
     * @var string
     */
    private $AxeAnalytique2;

    /**
     * @var string
     */
    private $ValeurAxeAnalytique2;

    /**
     * @var string
     */
    private $ReferenceExterneManifestation;

    /**
     * @var string
     */
    private $IntituleManifestation;

    /**
     * @var \DateTimeInterface
     */
    private $DateDebut;

    /**
     * @var \DateTimeInterface
     */
    private $DateFin;

    /**
     * @return string
     */
    public function getNomInterneEtablissement()
    {
        return $this->NomInterneEtablissement;
    }

    /**
     * @param string $NomInterneEtablissement
     * @return CPAISWSExtraManifestation
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }

    /**
     * @return string
     */
    public function getAxeAnalytique()
    {
        return $this->AxeAnalytique;
    }

    /**
     * @param string $AxeAnalytique
     * @return CPAISWSExtraManifestation
     */
    public function withAxeAnalytique($AxeAnalytique)
    {
        $new = clone $this;
        $new->AxeAnalytique = $AxeAnalytique;

        return $new;
    }

    /**
     * @return string
     */
    public function getValeurAxeAnalytique()
    {
        return $this->ValeurAxeAnalytique;
    }

    /**
     * @param string $ValeurAxeAnalytique
     * @return CPAISWSExtraManifestation
     */
    public function withValeurAxeAnalytique($ValeurAxeAnalytique)
    {
        $new = clone $this;
        $new->ValeurAxeAnalytique = $ValeurAxeAnalytique;

        return $new;
    }

    /**
     * @return string
     */
    public function getAxeAnalytique2()
    {
        return $this->AxeAnalytique2;
    }

    /**
     * @param string $AxeAnalytique2
     * @return CPAISWSExtraManifestation
     */
    public function withAxeAnalytique2($AxeAnalytique2)
    {
        $new = clone $this;
        $new->AxeAnalytique2 = $AxeAnalytique2;

        return $new;
    }

    /**
     * @return string
     */
    public function getValeurAxeAnalytique2()
    {
        return $this->ValeurAxeAnalytique2;
    }

    /**
     * @param string $ValeurAxeAnalytique2
     * @return CPAISWSExtraManifestation
     */
    public function withValeurAxeAnalytique2($ValeurAxeAnalytique2)
    {
        $new = clone $this;
        $new->ValeurAxeAnalytique2 = $ValeurAxeAnalytique2;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferenceExterneManifestation()
    {
        return $this->ReferenceExterneManifestation;
    }

    /**
     * @param string $ReferenceExterneManifestation
     * @return CPAISWSExtraManifestation
     */
    public function withReferenceExterneManifestation($ReferenceExterneManifestation)
    {
        $new = clone $this;
        $new->ReferenceExterneManifestation = $ReferenceExterneManifestation;

        return $new;
    }

    /**
     * @return string
     */
    public function getIntituleManifestation()
    {
        return $this->IntituleManifestation;
    }

    /**
     * @param string $IntituleManifestation
     * @return CPAISWSExtraManifestation
     */
    public function withIntituleManifestation($IntituleManifestation)
    {
        $new = clone $this;
        $new->IntituleManifestation = $IntituleManifestation;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebut()
    {
        return $this->DateDebut;
    }

    /**
     * @param \DateTimeInterface $DateDebut
     * @return CPAISWSExtraManifestation
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
     * @return CPAISWSExtraManifestation
     */
    public function withDateFin($DateFin)
    {
        $new = clone $this;
        $new->DateFin = $DateFin;

        return $new;
    }
}

