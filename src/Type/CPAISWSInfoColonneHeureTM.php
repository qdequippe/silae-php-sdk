<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSInfoColonneHeureTM
{
    /**
     * @var string
     */
    private $Libelle;

    /**
     * @var string
     */
    private $CodeHeure;

    /**
     * @var bool
     */
    private $HeureNative;

    /**
     * @var bool
     */
    private $HeureContractuelle;

    /**
     * @var bool
     */
    private $HeureComplementaire;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $HeureComplementairePourCCN;

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return CPAISWSInfoColonneHeureTM
     */
    public function withLibelle($Libelle)
    {
        $new = clone $this;
        $new->Libelle = $Libelle;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeHeure()
    {
        return $this->CodeHeure;
    }

    /**
     * @param string $CodeHeure
     * @return CPAISWSInfoColonneHeureTM
     */
    public function withCodeHeure($CodeHeure)
    {
        $new = clone $this;
        $new->CodeHeure = $CodeHeure;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHeureNative()
    {
        return $this->HeureNative;
    }

    /**
     * @param bool $HeureNative
     * @return CPAISWSInfoColonneHeureTM
     */
    public function withHeureNative($HeureNative)
    {
        $new = clone $this;
        $new->HeureNative = $HeureNative;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHeureContractuelle()
    {
        return $this->HeureContractuelle;
    }

    /**
     * @param bool $HeureContractuelle
     * @return CPAISWSInfoColonneHeureTM
     */
    public function withHeureContractuelle($HeureContractuelle)
    {
        $new = clone $this;
        $new->HeureContractuelle = $HeureContractuelle;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHeureComplementaire()
    {
        return $this->HeureComplementaire;
    }

    /**
     * @param bool $HeureComplementaire
     * @return CPAISWSInfoColonneHeureTM
     */
    public function withHeureComplementaire($HeureComplementaire)
    {
        $new = clone $this;
        $new->HeureComplementaire = $HeureComplementaire;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getHeureComplementairePourCCN()
    {
        return $this->HeureComplementairePourCCN;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $HeureComplementairePourCCN
     * @return CPAISWSInfoColonneHeureTM
     */
    public function withHeureComplementairePourCCN($HeureComplementairePourCCN)
    {
        $new = clone $this;
        $new->HeureComplementairePourCCN = $HeureComplementairePourCCN;

        return $new;
    }
}

