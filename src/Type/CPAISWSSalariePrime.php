<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalariePrime
{
    /**
     * @var \DateTimeInterface
     */
    private $PeriodePrime;

    /**
     * @var string
     */
    private $CodePrime;

    /**
     * @var float
     */
    private $MontantPrime;

    /**
     * @var string
     */
    private $ValeurChainePrime;

    /**
     * @var bool
     */
    private $PrimeNette;

    /**
     * @var string
     */
    private $IntituleBulletin;

    /**
     * @var string
     */
    private $IntituleCourt;

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodePrime()
    {
        return $this->PeriodePrime;
    }

    /**
     * @param \DateTimeInterface $PeriodePrime
     * @return CPAISWSSalariePrime
     */
    public function withPeriodePrime($PeriodePrime)
    {
        $new = clone $this;
        $new->PeriodePrime = $PeriodePrime;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodePrime()
    {
        return $this->CodePrime;
    }

    /**
     * @param string $CodePrime
     * @return CPAISWSSalariePrime
     */
    public function withCodePrime($CodePrime)
    {
        $new = clone $this;
        $new->CodePrime = $CodePrime;

        return $new;
    }

    /**
     * @return float
     */
    public function getMontantPrime()
    {
        return $this->MontantPrime;
    }

    /**
     * @param float $MontantPrime
     * @return CPAISWSSalariePrime
     */
    public function withMontantPrime($MontantPrime)
    {
        $new = clone $this;
        $new->MontantPrime = $MontantPrime;

        return $new;
    }

    /**
     * @return string
     */
    public function getValeurChainePrime()
    {
        return $this->ValeurChainePrime;
    }

    /**
     * @param string $ValeurChainePrime
     * @return CPAISWSSalariePrime
     */
    public function withValeurChainePrime($ValeurChainePrime)
    {
        $new = clone $this;
        $new->ValeurChainePrime = $ValeurChainePrime;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPrimeNette()
    {
        return $this->PrimeNette;
    }

    /**
     * @param bool $PrimeNette
     * @return CPAISWSSalariePrime
     */
    public function withPrimeNette($PrimeNette)
    {
        $new = clone $this;
        $new->PrimeNette = $PrimeNette;

        return $new;
    }

    /**
     * @return string
     */
    public function getIntituleBulletin()
    {
        return $this->IntituleBulletin;
    }

    /**
     * @param string $IntituleBulletin
     * @return CPAISWSSalariePrime
     */
    public function withIntituleBulletin($IntituleBulletin)
    {
        $new = clone $this;
        $new->IntituleBulletin = $IntituleBulletin;

        return $new;
    }

    /**
     * @return string
     */
    public function getIntituleCourt()
    {
        return $this->IntituleCourt;
    }

    /**
     * @param string $IntituleCourt
     * @return CPAISWSSalariePrime
     */
    public function withIntituleCourt($IntituleCourt)
    {
        $new = clone $this;
        $new->IntituleCourt = $IntituleCourt;

        return $new;
    }
}

