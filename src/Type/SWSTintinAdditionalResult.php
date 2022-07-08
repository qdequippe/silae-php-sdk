<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSTintinAdditionalResult
{
    /**
     * @var string
     */
    private $Resultat;

    /**
     * @return string
     */
    public function getResultat()
    {
        return $this->Resultat;
    }

    /**
     * @param string $Resultat
     * @return SWSTintinAdditionalResult
     */
    public function withResultat($Resultat)
    {
        $new = clone $this;
        $new->Resultat = $Resultat;

        return $new;
    }
}

