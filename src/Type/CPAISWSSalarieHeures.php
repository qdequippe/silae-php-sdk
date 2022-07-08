<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieHeures
{
    /**
     * @var \DateTimeInterface
     */
    private $PeriodeHeures;

    /**
     * @var string
     */
    private $CodeHeures;

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
    public function getPeriodeHeures()
    {
        return $this->PeriodeHeures;
    }

    /**
     * @param \DateTimeInterface $PeriodeHeures
     * @return CPAISWSSalarieHeures
     */
    public function withPeriodeHeures($PeriodeHeures)
    {
        $new = clone $this;
        $new->PeriodeHeures = $PeriodeHeures;

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
     * @return CPAISWSSalarieHeures
     */
    public function withCodeHeures($CodeHeures)
    {
        $new = clone $this;
        $new->CodeHeures = $CodeHeures;

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
     * @return CPAISWSSalarieHeures
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
     * @return CPAISWSSalarieHeures
     */
    public function withAjouter($Ajouter)
    {
        $new = clone $this;
        $new->Ajouter = $Ajouter;

        return $new;
    }
}

