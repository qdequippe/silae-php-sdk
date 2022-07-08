<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSInitialisationAncienNumeroContratDSN
{
    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var int
     */
    private $IdentifiantEmploi;

    /**
     * @var string
     */
    private $NumeroContratDSN;

    /**
     * @var string
     */
    private $SiretDOrigine;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeDeclaration;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSInitialisationAncienNumeroContratDSN
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSInitialisationAncienNumeroContratDSN
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdentifiantEmploi()
    {
        return $this->IdentifiantEmploi;
    }

    /**
     * @param int $IdentifiantEmploi
     * @return CPAISWSInitialisationAncienNumeroContratDSN
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroContratDSN()
    {
        return $this->NumeroContratDSN;
    }

    /**
     * @param string $NumeroContratDSN
     * @return CPAISWSInitialisationAncienNumeroContratDSN
     */
    public function withNumeroContratDSN($NumeroContratDSN)
    {
        $new = clone $this;
        $new->NumeroContratDSN = $NumeroContratDSN;

        return $new;
    }

    /**
     * @return string
     */
    public function getSiretDOrigine()
    {
        return $this->SiretDOrigine;
    }

    /**
     * @param string $SiretDOrigine
     * @return CPAISWSInitialisationAncienNumeroContratDSN
     */
    public function withSiretDOrigine($SiretDOrigine)
    {
        $new = clone $this;
        $new->SiretDOrigine = $SiretDOrigine;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeDeclaration()
    {
        return $this->PeriodeDeclaration;
    }

    /**
     * @param \DateTimeInterface $PeriodeDeclaration
     * @return CPAISWSInitialisationAncienNumeroContratDSN
     */
    public function withPeriodeDeclaration($PeriodeDeclaration)
    {
        $new = clone $this;
        $new->PeriodeDeclaration = $PeriodeDeclaration;

        return $new;
    }
}

