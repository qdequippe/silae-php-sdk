<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSComptesNumeroIntituleResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CCTASWSComptesNumeroIntitule
     */
    private $ComptesNumeroIntitule;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CCTASWSComptesNumeroIntitule
     */
    public function getComptesNumeroIntitule()
    {
        return $this->ComptesNumeroIntitule;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CCTASWSComptesNumeroIntitule $ComptesNumeroIntitule
     * @return SWSComptesNumeroIntituleResult
     */
    public function withComptesNumeroIntitule($ComptesNumeroIntitule)
    {
        $new = clone $this;
        $new->ComptesNumeroIntitule = $ComptesNumeroIntitule;

        return $new;
    }
}

