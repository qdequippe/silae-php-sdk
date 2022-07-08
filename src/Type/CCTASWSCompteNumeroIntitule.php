<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CCTASWSCompteNumeroIntitule
{
    /**
     * @var string
     */
    private $Numero;

    /**
     * @var string
     */
    private $Intitule;

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * @param string $Numero
     * @return CCTASWSCompteNumeroIntitule
     */
    public function withNumero($Numero)
    {
        $new = clone $this;
        $new->Numero = $Numero;

        return $new;
    }

    /**
     * @return string
     */
    public function getIntitule()
    {
        return $this->Intitule;
    }

    /**
     * @param string $Intitule
     * @return CCTASWSCompteNumeroIntitule
     */
    public function withIntitule($Intitule)
    {
        $new = clone $this;
        $new->Intitule = $Intitule;

        return $new;
    }
}

