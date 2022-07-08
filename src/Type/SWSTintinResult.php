<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSTintinResult
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
     * @return SWSTintinResult
     */
    public function withResultat($Resultat)
    {
        $new = clone $this;
        $new->Resultat = $Resultat;

        return $new;
    }
}

