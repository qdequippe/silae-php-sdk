<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSInfoSaisieHeureTM
{
    /**
     * @var int
     */
    private $IndiceColonne;

    /**
     * @var bool
     */
    private $ValeurDefinie;

    /**
     * @var float
     */
    private $Valeur;

    /**
     * @var bool
     */
    private $Enabled;

    /**
     * @return int
     */
    public function getIndiceColonne()
    {
        return $this->IndiceColonne;
    }

    /**
     * @param int $IndiceColonne
     * @return CPAISWSInfoSaisieHeureTM
     */
    public function withIndiceColonne($IndiceColonne)
    {
        $new = clone $this;
        $new->IndiceColonne = $IndiceColonne;

        return $new;
    }

    /**
     * @return bool
     */
    public function getValeurDefinie()
    {
        return $this->ValeurDefinie;
    }

    /**
     * @param bool $ValeurDefinie
     * @return CPAISWSInfoSaisieHeureTM
     */
    public function withValeurDefinie($ValeurDefinie)
    {
        $new = clone $this;
        $new->ValeurDefinie = $ValeurDefinie;

        return $new;
    }

    /**
     * @return float
     */
    public function getValeur()
    {
        return $this->Valeur;
    }

    /**
     * @param float $Valeur
     * @return CPAISWSInfoSaisieHeureTM
     */
    public function withValeur($Valeur)
    {
        $new = clone $this;
        $new->Valeur = $Valeur;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->Enabled;
    }

    /**
     * @param bool $Enabled
     * @return CPAISWSInfoSaisieHeureTM
     */
    public function withEnabled($Enabled)
    {
        $new = clone $this;
        $new->Enabled = $Enabled;

        return $new;
    }
}

