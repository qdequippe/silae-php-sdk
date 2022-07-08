<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSDeclarationEvenementielle
{
    /**
     * @var string
     */
    private $TypeDeclaration;

    /**
     * @var int
     */
    private $EtatDeclaration;

    /**
     * @var int
     */
    private $EtatEnvoi;

    /**
     * @var string
     */
    private $LibelleEtat;

    /**
     * @var string
     */
    private $Matricule;

    /**
     * @var string
     */
    private $NomSalarie;

    /**
     * @var \DateTimeInterface
     */
    private $DateDebut;

    /**
     * @var \DateTimeInterface
     */
    private $DateFin;

    /**
     * @var string
     */
    private $CodeAbsence;

    /**
     * @var string
     */
    private $LibelleAbsence;

    /**
     * @return string
     */
    public function getTypeDeclaration()
    {
        return $this->TypeDeclaration;
    }

    /**
     * @param string $TypeDeclaration
     * @return CPAISWSDeclarationEvenementielle
     */
    public function withTypeDeclaration($TypeDeclaration)
    {
        $new = clone $this;
        $new->TypeDeclaration = $TypeDeclaration;

        return $new;
    }

    /**
     * @return int
     */
    public function getEtatDeclaration()
    {
        return $this->EtatDeclaration;
    }

    /**
     * @param int $EtatDeclaration
     * @return CPAISWSDeclarationEvenementielle
     */
    public function withEtatDeclaration($EtatDeclaration)
    {
        $new = clone $this;
        $new->EtatDeclaration = $EtatDeclaration;

        return $new;
    }

    /**
     * @return int
     */
    public function getEtatEnvoi()
    {
        return $this->EtatEnvoi;
    }

    /**
     * @param int $EtatEnvoi
     * @return CPAISWSDeclarationEvenementielle
     */
    public function withEtatEnvoi($EtatEnvoi)
    {
        $new = clone $this;
        $new->EtatEnvoi = $EtatEnvoi;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleEtat()
    {
        return $this->LibelleEtat;
    }

    /**
     * @param string $LibelleEtat
     * @return CPAISWSDeclarationEvenementielle
     */
    public function withLibelleEtat($LibelleEtat)
    {
        $new = clone $this;
        $new->LibelleEtat = $LibelleEtat;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param string $Matricule
     * @return CPAISWSDeclarationEvenementielle
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomSalarie()
    {
        return $this->NomSalarie;
    }

    /**
     * @param string $NomSalarie
     * @return CPAISWSDeclarationEvenementielle
     */
    public function withNomSalarie($NomSalarie)
    {
        $new = clone $this;
        $new->NomSalarie = $NomSalarie;

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
     * @return CPAISWSDeclarationEvenementielle
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
     * @return CPAISWSDeclarationEvenementielle
     */
    public function withDateFin($DateFin)
    {
        $new = clone $this;
        $new->DateFin = $DateFin;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeAbsence()
    {
        return $this->CodeAbsence;
    }

    /**
     * @param string $CodeAbsence
     * @return CPAISWSDeclarationEvenementielle
     */
    public function withCodeAbsence($CodeAbsence)
    {
        $new = clone $this;
        $new->CodeAbsence = $CodeAbsence;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelleAbsence()
    {
        return $this->LibelleAbsence;
    }

    /**
     * @param string $LibelleAbsence
     * @return CPAISWSDeclarationEvenementielle
     */
    public function withLibelleAbsence($LibelleAbsence)
    {
        $new = clone $this;
        $new->LibelleAbsence = $LibelleAbsence;

        return $new;
    }
}

