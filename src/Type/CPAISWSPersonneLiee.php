<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSPersonneLiee
{
    /**
     * @var string
     */
    private $Prenom;

    /**
     * @var string
     */
    private $NomUsuel;

    /**
     * @var int
     */
    private $TypeLien;

    /**
     * @var \DateTimeInterface
     */
    private $DateNaissance;

    /**
     * @var string
     */
    private $NumeroSS;

    /**
     * @var int
     */
    private $Sexe;

    /**
     * @var bool
     */
    private $ACharge;

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param string $Prenom
     * @return CPAISWSPersonneLiee
     */
    public function withPrenom($Prenom)
    {
        $new = clone $this;
        $new->Prenom = $Prenom;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomUsuel()
    {
        return $this->NomUsuel;
    }

    /**
     * @param string $NomUsuel
     * @return CPAISWSPersonneLiee
     */
    public function withNomUsuel($NomUsuel)
    {
        $new = clone $this;
        $new->NomUsuel = $NomUsuel;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeLien()
    {
        return $this->TypeLien;
    }

    /**
     * @param int $TypeLien
     * @return CPAISWSPersonneLiee
     */
    public function withTypeLien($TypeLien)
    {
        $new = clone $this;
        $new->TypeLien = $TypeLien;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }

    /**
     * @param \DateTimeInterface $DateNaissance
     * @return CPAISWSPersonneLiee
     */
    public function withDateNaissance($DateNaissance)
    {
        $new = clone $this;
        $new->DateNaissance = $DateNaissance;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroSS()
    {
        return $this->NumeroSS;
    }

    /**
     * @param string $NumeroSS
     * @return CPAISWSPersonneLiee
     */
    public function withNumeroSS($NumeroSS)
    {
        $new = clone $this;
        $new->NumeroSS = $NumeroSS;

        return $new;
    }

    /**
     * @return int
     */
    public function getSexe()
    {
        return $this->Sexe;
    }

    /**
     * @param int $Sexe
     * @return CPAISWSPersonneLiee
     */
    public function withSexe($Sexe)
    {
        $new = clone $this;
        $new->Sexe = $Sexe;

        return $new;
    }

    /**
     * @return bool
     */
    public function getACharge()
    {
        return $this->ACharge;
    }

    /**
     * @param bool $ACharge
     * @return CPAISWSPersonneLiee
     */
    public function withACharge($ACharge)
    {
        $new = clone $this;
        $new->ACharge = $ACharge;

        return $new;
    }
}

