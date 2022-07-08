<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSEcrituresComptables
{
    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeDebut;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeFin;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEcrituresComptablesLigne
     */
    private $Ecritures;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSEcrituresComptables
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeDebut()
    {
        return $this->PeriodeDebut;
    }

    /**
     * @param \DateTimeInterface $PeriodeDebut
     * @return CPAISWSEcrituresComptables
     */
    public function withPeriodeDebut($PeriodeDebut)
    {
        $new = clone $this;
        $new->PeriodeDebut = $PeriodeDebut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeFin()
    {
        return $this->PeriodeFin;
    }

    /**
     * @param \DateTimeInterface $PeriodeFin
     * @return CPAISWSEcrituresComptables
     */
    public function withPeriodeFin($PeriodeFin)
    {
        $new = clone $this;
        $new->PeriodeFin = $PeriodeFin;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEcrituresComptablesLigne
     */
    public function getEcritures()
    {
        return $this->Ecritures;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEcrituresComptablesLigne $Ecritures
     * @return CPAISWSEcrituresComptables
     */
    public function withEcritures($Ecritures)
    {
        $new = clone $this;
        $new->Ecritures = $Ecritures;

        return $new;
    }
}

