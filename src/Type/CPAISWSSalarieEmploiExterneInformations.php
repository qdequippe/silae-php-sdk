<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieEmploiExterneInformations
{
    /**
     * @var int
     */
    private $IdentifiantEmploi;

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
    private $IntituleEmploi;

    /**
     * @var string
     */
    private $Motif;

    /**
     * @var string
     */
    private $CodeSociete;

    /**
     * @var string
     */
    private $NomInterneEtablissement;

    /**
     * @return int
     */
    public function getIdentifiantEmploi()
    {
        return $this->IdentifiantEmploi;
    }

    /**
     * @param int $IdentifiantEmploi
     * @return CPAISWSSalarieEmploiExterneInformations
     */
    public function withIdentifiantEmploi($IdentifiantEmploi)
    {
        $new = clone $this;
        $new->IdentifiantEmploi = $IdentifiantEmploi;

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
     * @return CPAISWSSalarieEmploiExterneInformations
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
     * @return CPAISWSSalarieEmploiExterneInformations
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
    public function getIntituleEmploi()
    {
        return $this->IntituleEmploi;
    }

    /**
     * @param string $IntituleEmploi
     * @return CPAISWSSalarieEmploiExterneInformations
     */
    public function withIntituleEmploi($IntituleEmploi)
    {
        $new = clone $this;
        $new->IntituleEmploi = $IntituleEmploi;

        return $new;
    }

    /**
     * @return string
     */
    public function getMotif()
    {
        return $this->Motif;
    }

    /**
     * @param string $Motif
     * @return CPAISWSSalarieEmploiExterneInformations
     */
    public function withMotif($Motif)
    {
        $new = clone $this;
        $new->Motif = $Motif;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeSociete()
    {
        return $this->CodeSociete;
    }

    /**
     * @param string $CodeSociete
     * @return CPAISWSSalarieEmploiExterneInformations
     */
    public function withCodeSociete($CodeSociete)
    {
        $new = clone $this;
        $new->CodeSociete = $CodeSociete;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomInterneEtablissement()
    {
        return $this->NomInterneEtablissement;
    }

    /**
     * @param string $NomInterneEtablissement
     * @return CPAISWSSalarieEmploiExterneInformations
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }
}

