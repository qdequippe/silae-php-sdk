<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSaisieHMens
{
    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var string
     */
    private $CodeHeures;

    /**
     * @var bool
     */
    private $EstHeureNative;

    /**
     * @var float
     */
    private $NombreHeures;

    /**
     * @var bool
     */
    private $Ajouter;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSSaisieHMens
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeHeures()
    {
        return $this->CodeHeures;
    }

    /**
     * @param string $CodeHeures
     * @return CPAISWSSaisieHMens
     */
    public function withCodeHeures($CodeHeures)
    {
        $new = clone $this;
        $new->CodeHeures = $CodeHeures;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEstHeureNative()
    {
        return $this->EstHeureNative;
    }

    /**
     * @param bool $EstHeureNative
     * @return CPAISWSSaisieHMens
     */
    public function withEstHeureNative($EstHeureNative)
    {
        $new = clone $this;
        $new->EstHeureNative = $EstHeureNative;

        return $new;
    }

    /**
     * @return float
     */
    public function getNombreHeures()
    {
        return $this->NombreHeures;
    }

    /**
     * @param float $NombreHeures
     * @return CPAISWSSaisieHMens
     */
    public function withNombreHeures($NombreHeures)
    {
        $new = clone $this;
        $new->NombreHeures = $NombreHeures;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAjouter()
    {
        return $this->Ajouter;
    }

    /**
     * @param bool $Ajouter
     * @return CPAISWSSaisieHMens
     */
    public function withAjouter($Ajouter)
    {
        $new = clone $this;
        $new->Ajouter = $Ajouter;

        return $new;
    }
}

