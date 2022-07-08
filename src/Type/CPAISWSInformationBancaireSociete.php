<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSInformationBancaireSociete
{
    /**
     * @var string
     */
    private $NomInterneEtablissement;

    /**
     * @var string
     */
    private $Rib;

    /**
     * @var int
     */
    private $FormatFichiers;

    /**
     * @var string
     */
    private $Iban;

    /**
     * @var string
     */
    private $Bic;

    /**
     * @var string
     */
    private $NumeroEmetteur;

    /**
     * @return string
     */
    public function getNomInterneEtablissement()
    {
        return $this->NomInterneEtablissement;
    }

    /**
     * @param string $NomInterneEtablissement
     * @return CPAISWSInformationBancaireSociete
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }

    /**
     * @return string
     */
    public function getRib()
    {
        return $this->Rib;
    }

    /**
     * @param string $Rib
     * @return CPAISWSInformationBancaireSociete
     */
    public function withRib($Rib)
    {
        $new = clone $this;
        $new->Rib = $Rib;

        return $new;
    }

    /**
     * @return int
     */
    public function getFormatFichiers()
    {
        return $this->FormatFichiers;
    }

    /**
     * @param int $FormatFichiers
     * @return CPAISWSInformationBancaireSociete
     */
    public function withFormatFichiers($FormatFichiers)
    {
        $new = clone $this;
        $new->FormatFichiers = $FormatFichiers;

        return $new;
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->Iban;
    }

    /**
     * @param string $Iban
     * @return CPAISWSInformationBancaireSociete
     */
    public function withIban($Iban)
    {
        $new = clone $this;
        $new->Iban = $Iban;

        return $new;
    }

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->Bic;
    }

    /**
     * @param string $Bic
     * @return CPAISWSInformationBancaireSociete
     */
    public function withBic($Bic)
    {
        $new = clone $this;
        $new->Bic = $Bic;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroEmetteur()
    {
        return $this->NumeroEmetteur;
    }

    /**
     * @param string $NumeroEmetteur
     * @return CPAISWSInformationBancaireSociete
     */
    public function withNumeroEmetteur($NumeroEmetteur)
    {
        $new = clone $this;
        $new->NumeroEmetteur = $NumeroEmetteur;

        return $new;
    }
}

