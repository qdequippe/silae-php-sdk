<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CSWSInformationsDossierEx
{
    /**
     * @var int
     */
    private $ID_CLIENT;

    /**
     * @var bool
     */
    private $DossierPaieActif;

    /**
     * @var bool
     */
    private $DossierComptableActif;

    /**
     * @var int
     */
    private $ID_CTAEXERCICE;

    /**
     * @var string
     */
    private $Numero;

    /**
     * @var string
     */
    private $RaisonSociale;

    /**
     * @var string
     */
    private $CodePostal;

    /**
     * @var string
     */
    private $NomVille;

    /**
     * @var string
     */
    private $Siret;

    /**
     * @return int
     */
    public function getID_CLIENT()
    {
        return $this->ID_CLIENT;
    }

    /**
     * @param int $ID_CLIENT
     * @return CSWSInformationsDossierEx
     */
    public function withID_CLIENT($ID_CLIENT)
    {
        $new = clone $this;
        $new->ID_CLIENT = $ID_CLIENT;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDossierPaieActif()
    {
        return $this->DossierPaieActif;
    }

    /**
     * @param bool $DossierPaieActif
     * @return CSWSInformationsDossierEx
     */
    public function withDossierPaieActif($DossierPaieActif)
    {
        $new = clone $this;
        $new->DossierPaieActif = $DossierPaieActif;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDossierComptableActif()
    {
        return $this->DossierComptableActif;
    }

    /**
     * @param bool $DossierComptableActif
     * @return CSWSInformationsDossierEx
     */
    public function withDossierComptableActif($DossierComptableActif)
    {
        $new = clone $this;
        $new->DossierComptableActif = $DossierComptableActif;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_CTAEXERCICE()
    {
        return $this->ID_CTAEXERCICE;
    }

    /**
     * @param int $ID_CTAEXERCICE
     * @return CSWSInformationsDossierEx
     */
    public function withID_CTAEXERCICE($ID_CTAEXERCICE)
    {
        $new = clone $this;
        $new->ID_CTAEXERCICE = $ID_CTAEXERCICE;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumero()
    {
        return $this->Numero;
    }

    /**
     * @param string $Numero
     * @return CSWSInformationsDossierEx
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
    public function getRaisonSociale()
    {
        return $this->RaisonSociale;
    }

    /**
     * @param string $RaisonSociale
     * @return CSWSInformationsDossierEx
     */
    public function withRaisonSociale($RaisonSociale)
    {
        $new = clone $this;
        $new->RaisonSociale = $RaisonSociale;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodePostal()
    {
        return $this->CodePostal;
    }

    /**
     * @param string $CodePostal
     * @return CSWSInformationsDossierEx
     */
    public function withCodePostal($CodePostal)
    {
        $new = clone $this;
        $new->CodePostal = $CodePostal;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomVille()
    {
        return $this->NomVille;
    }

    /**
     * @param string $NomVille
     * @return CSWSInformationsDossierEx
     */
    public function withNomVille($NomVille)
    {
        $new = clone $this;
        $new->NomVille = $NomVille;

        return $new;
    }

    /**
     * @return string
     */
    public function getSiret()
    {
        return $this->Siret;
    }

    /**
     * @param string $Siret
     * @return CSWSInformationsDossierEx
     */
    public function withSiret($Siret)
    {
        $new = clone $this;
        $new->Siret = $Siret;

        return $new;
    }
}

