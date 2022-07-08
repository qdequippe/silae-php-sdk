<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSpectacle
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
    private $AxeAnalytique3;

    /**
     * @var string
     */
    private $ValeurAxeAnalytique3;

    /**
     * @var string
     */
    private $ReferenceExterneSpectacle;

    /**
     * @var string
     */
    private $NumeroObjet;

    /**
     * @var string
     */
    private $IntituleSpectacle;

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
     * @return CPAISWSSpectacle
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
     * @return CPAISWSSpectacle
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
     * @return CPAISWSSpectacle
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
     * @return CPAISWSSpectacle
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
     * @return CPAISWSSpectacle
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
    public function getAxeAnalytique3()
    {
        return $this->AxeAnalytique3;
    }

    /**
     * @param string $AxeAnalytique3
     * @return CPAISWSSpectacle
     */
    public function withAxeAnalytique3($AxeAnalytique3)
    {
        $new = clone $this;
        $new->AxeAnalytique3 = $AxeAnalytique3;

        return $new;
    }

    /**
     * @return string
     */
    public function getValeurAxeAnalytique3()
    {
        return $this->ValeurAxeAnalytique3;
    }

    /**
     * @param string $ValeurAxeAnalytique3
     * @return CPAISWSSpectacle
     */
    public function withValeurAxeAnalytique3($ValeurAxeAnalytique3)
    {
        $new = clone $this;
        $new->ValeurAxeAnalytique3 = $ValeurAxeAnalytique3;

        return $new;
    }

    /**
     * @return string
     */
    public function getReferenceExterneSpectacle()
    {
        return $this->ReferenceExterneSpectacle;
    }

    /**
     * @param string $ReferenceExterneSpectacle
     * @return CPAISWSSpectacle
     */
    public function withReferenceExterneSpectacle($ReferenceExterneSpectacle)
    {
        $new = clone $this;
        $new->ReferenceExterneSpectacle = $ReferenceExterneSpectacle;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroObjet()
    {
        return $this->NumeroObjet;
    }

    /**
     * @param string $NumeroObjet
     * @return CPAISWSSpectacle
     */
    public function withNumeroObjet($NumeroObjet)
    {
        $new = clone $this;
        $new->NumeroObjet = $NumeroObjet;

        return $new;
    }

    /**
     * @return string
     */
    public function getIntituleSpectacle()
    {
        return $this->IntituleSpectacle;
    }

    /**
     * @param string $IntituleSpectacle
     * @return CPAISWSSpectacle
     */
    public function withIntituleSpectacle($IntituleSpectacle)
    {
        $new = clone $this;
        $new->IntituleSpectacle = $IntituleSpectacle;

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
     * @return CPAISWSSpectacle
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
     * @return CPAISWSSpectacle
     */
    public function withDateFin($DateFin)
    {
        $new = clone $this;
        $new->DateFin = $DateFin;

        return $new;
    }
}

