<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CCTASWSComptesNumeroIntitule
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCCTASWSCompteNumeroIntitule
     */
    private $Comptes;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCCTASWSCompteNumeroIntitule
     */
    public function getComptes()
    {
        return $this->Comptes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCCTASWSCompteNumeroIntitule $Comptes
     * @return CCTASWSComptesNumeroIntitule
     */
    public function withComptes($Comptes)
    {
        $new = clone $this;
        $new->Comptes = $Comptes;

        return $new;
    }
}

