<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSModificationChamp
{
    /**
     * @var string
     */
    private $NomChamp;

    /**
     * @var mixed
     */
    private $Valeur;

    /**
     * @return string
     */
    public function getNomChamp()
    {
        return $this->NomChamp;
    }

    /**
     * @param string $NomChamp
     * @return CPAISWSModificationChamp
     */
    public function withNomChamp($NomChamp)
    {
        $new = clone $this;
        $new->NomChamp = $NomChamp;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getValeur()
    {
        return $this->Valeur;
    }

    /**
     * @param mixed $Valeur
     * @return CPAISWSModificationChamp
     */
    public function withValeur($Valeur)
    {
        $new = clone $this;
        $new->Valeur = $Valeur;

        return $new;
    }
}

