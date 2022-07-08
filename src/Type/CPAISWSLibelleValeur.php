<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSLibelleValeur
{
    /**
     * @var string
     */
    private $Libelle;

    /**
     * @var int
     */
    private $Valeur;

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return CPAISWSLibelleValeur
     */
    public function withLibelle($Libelle)
    {
        $new = clone $this;
        $new->Libelle = $Libelle;

        return $new;
    }

    /**
     * @return int
     */
    public function getValeur()
    {
        return $this->Valeur;
    }

    /**
     * @param int $Valeur
     * @return CPAISWSLibelleValeur
     */
    public function withValeur($Valeur)
    {
        $new = clone $this;
        $new->Valeur = $Valeur;

        return $new;
    }
}

