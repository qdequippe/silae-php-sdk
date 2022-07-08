<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSQContratComplementaire
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Libelle;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSLibelleValeur
     */
    private $ListeChoix;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return CPAISWSQContratComplementaire
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return CPAISWSQContratComplementaire
     */
    public function withLibelle($Libelle)
    {
        $new = clone $this;
        $new->Libelle = $Libelle;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSLibelleValeur
     */
    public function getListeChoix()
    {
        return $this->ListeChoix;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSLibelleValeur $ListeChoix
     * @return CPAISWSQContratComplementaire
     */
    public function withListeChoix($ListeChoix)
    {
        $new = clone $this;
        $new->ListeChoix = $ListeChoix;

        return $new;
    }
}

