<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSArgumentConfirmerEV
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSIdentificationEmploi
     */
    private $Emplois;

    /**
     * @var \DateTimeInterface
     */
    private $Periode;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $Primes;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSIdentificationEmploi
     */
    public function getEmplois()
    {
        return $this->Emplois;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSIdentificationEmploi $Emplois
     * @return CPAISWSArgumentConfirmerEV
     */
    public function withEmplois($Emplois)
    {
        $new = clone $this;
        $new->Emplois = $Emplois;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriode()
    {
        return $this->Periode;
    }

    /**
     * @param \DateTimeInterface $Periode
     * @return CPAISWSArgumentConfirmerEV
     */
    public function withPeriode($Periode)
    {
        $new = clone $this;
        $new->Periode = $Periode;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getPrimes()
    {
        return $this->Primes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $Primes
     * @return CPAISWSArgumentConfirmerEV
     */
    public function withPrimes($Primes)
    {
        $new = clone $this;
        $new->Primes = $Primes;

        return $new;
    }
}

