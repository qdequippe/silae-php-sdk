<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieEmploiTM
{
    /**
     * @var int
     */
    private $IdenfitiantEmploi;

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
    private $CodeCCN;

    /**
     * @var bool
     */
    private $EmploiArchive;

    /**
     * @var string
     */
    private $NomInterneEtablissement;

    /**
     * @return int
     */
    public function getIdenfitiantEmploi()
    {
        return $this->IdenfitiantEmploi;
    }

    /**
     * @param int $IdenfitiantEmploi
     * @return CPAISWSSalarieEmploiTM
     */
    public function withIdenfitiantEmploi($IdenfitiantEmploi)
    {
        $new = clone $this;
        $new->IdenfitiantEmploi = $IdenfitiantEmploi;

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
     * @return CPAISWSSalarieEmploiTM
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
     * @return CPAISWSSalarieEmploiTM
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
     * @return CPAISWSSalarieEmploiTM
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
    public function getCodeCCN()
    {
        return $this->CodeCCN;
    }

    /**
     * @param string $CodeCCN
     * @return CPAISWSSalarieEmploiTM
     */
    public function withCodeCCN($CodeCCN)
    {
        $new = clone $this;
        $new->CodeCCN = $CodeCCN;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEmploiArchive()
    {
        return $this->EmploiArchive;
    }

    /**
     * @param bool $EmploiArchive
     * @return CPAISWSSalarieEmploiTM
     */
    public function withEmploiArchive($EmploiArchive)
    {
        $new = clone $this;
        $new->EmploiArchive = $EmploiArchive;

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
     * @return CPAISWSSalarieEmploiTM
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }
}

