<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CSWSClient
{
    /**
     * @var int
     */
    private $ID_CLIENT;

    /**
     * @var string
     */
    private $CLI_NumeroDossier;

    /**
     * @var string
     */
    private $INT_RaisonSociale;

    /**
     * @var string
     */
    private $INT_NumVoie;

    /**
     * @var string
     */
    private $INT_BTQC;

    /**
     * @var string
     */
    private $INT_NomVoie;

    /**
     * @var string
     */
    private $INT_ComplementAdresse;

    /**
     * @var string
     */
    private $INT_CodePostal;

    /**
     * @var string
     */
    private $INT_NomVille;

    /**
     * @var string
     */
    private $INT_CommuneINSEE;

    /**
     * @var string
     */
    private $INT_Commune;

    /**
     * @var string
     */
    private $INT_Siret;

    /**
     * @var string
     */
    private $INT_NAF;

    /**
     * @var string
     */
    private $INT_PaysISO;

    /**
     * @var string
     */
    private $INT_NomPays;

    /**
     * @var string
     */
    private $INT_TelBureau;

    /**
     * @var string
     */
    private $INT_Fax;

    /**
     * @return int
     */
    public function getID_CLIENT()
    {
        return $this->ID_CLIENT;
    }

    /**
     * @param int $ID_CLIENT
     * @return CSWSClient
     */
    public function withID_CLIENT($ID_CLIENT)
    {
        $new = clone $this;
        $new->ID_CLIENT = $ID_CLIENT;

        return $new;
    }

    /**
     * @return string
     */
    public function getCLI_NumeroDossier()
    {
        return $this->CLI_NumeroDossier;
    }

    /**
     * @param string $CLI_NumeroDossier
     * @return CSWSClient
     */
    public function withCLI_NumeroDossier($CLI_NumeroDossier)
    {
        $new = clone $this;
        $new->CLI_NumeroDossier = $CLI_NumeroDossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_RaisonSociale()
    {
        return $this->INT_RaisonSociale;
    }

    /**
     * @param string $INT_RaisonSociale
     * @return CSWSClient
     */
    public function withINT_RaisonSociale($INT_RaisonSociale)
    {
        $new = clone $this;
        $new->INT_RaisonSociale = $INT_RaisonSociale;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_NumVoie()
    {
        return $this->INT_NumVoie;
    }

    /**
     * @param string $INT_NumVoie
     * @return CSWSClient
     */
    public function withINT_NumVoie($INT_NumVoie)
    {
        $new = clone $this;
        $new->INT_NumVoie = $INT_NumVoie;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_BTQC()
    {
        return $this->INT_BTQC;
    }

    /**
     * @param string $INT_BTQC
     * @return CSWSClient
     */
    public function withINT_BTQC($INT_BTQC)
    {
        $new = clone $this;
        $new->INT_BTQC = $INT_BTQC;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_NomVoie()
    {
        return $this->INT_NomVoie;
    }

    /**
     * @param string $INT_NomVoie
     * @return CSWSClient
     */
    public function withINT_NomVoie($INT_NomVoie)
    {
        $new = clone $this;
        $new->INT_NomVoie = $INT_NomVoie;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_ComplementAdresse()
    {
        return $this->INT_ComplementAdresse;
    }

    /**
     * @param string $INT_ComplementAdresse
     * @return CSWSClient
     */
    public function withINT_ComplementAdresse($INT_ComplementAdresse)
    {
        $new = clone $this;
        $new->INT_ComplementAdresse = $INT_ComplementAdresse;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_CodePostal()
    {
        return $this->INT_CodePostal;
    }

    /**
     * @param string $INT_CodePostal
     * @return CSWSClient
     */
    public function withINT_CodePostal($INT_CodePostal)
    {
        $new = clone $this;
        $new->INT_CodePostal = $INT_CodePostal;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_NomVille()
    {
        return $this->INT_NomVille;
    }

    /**
     * @param string $INT_NomVille
     * @return CSWSClient
     */
    public function withINT_NomVille($INT_NomVille)
    {
        $new = clone $this;
        $new->INT_NomVille = $INT_NomVille;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_CommuneINSEE()
    {
        return $this->INT_CommuneINSEE;
    }

    /**
     * @param string $INT_CommuneINSEE
     * @return CSWSClient
     */
    public function withINT_CommuneINSEE($INT_CommuneINSEE)
    {
        $new = clone $this;
        $new->INT_CommuneINSEE = $INT_CommuneINSEE;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_Commune()
    {
        return $this->INT_Commune;
    }

    /**
     * @param string $INT_Commune
     * @return CSWSClient
     */
    public function withINT_Commune($INT_Commune)
    {
        $new = clone $this;
        $new->INT_Commune = $INT_Commune;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_Siret()
    {
        return $this->INT_Siret;
    }

    /**
     * @param string $INT_Siret
     * @return CSWSClient
     */
    public function withINT_Siret($INT_Siret)
    {
        $new = clone $this;
        $new->INT_Siret = $INT_Siret;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_NAF()
    {
        return $this->INT_NAF;
    }

    /**
     * @param string $INT_NAF
     * @return CSWSClient
     */
    public function withINT_NAF($INT_NAF)
    {
        $new = clone $this;
        $new->INT_NAF = $INT_NAF;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_PaysISO()
    {
        return $this->INT_PaysISO;
    }

    /**
     * @param string $INT_PaysISO
     * @return CSWSClient
     */
    public function withINT_PaysISO($INT_PaysISO)
    {
        $new = clone $this;
        $new->INT_PaysISO = $INT_PaysISO;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_NomPays()
    {
        return $this->INT_NomPays;
    }

    /**
     * @param string $INT_NomPays
     * @return CSWSClient
     */
    public function withINT_NomPays($INT_NomPays)
    {
        $new = clone $this;
        $new->INT_NomPays = $INT_NomPays;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_TelBureau()
    {
        return $this->INT_TelBureau;
    }

    /**
     * @param string $INT_TelBureau
     * @return CSWSClient
     */
    public function withINT_TelBureau($INT_TelBureau)
    {
        $new = clone $this;
        $new->INT_TelBureau = $INT_TelBureau;

        return $new;
    }

    /**
     * @return string
     */
    public function getINT_Fax()
    {
        return $this->INT_Fax;
    }

    /**
     * @param string $INT_Fax
     * @return CSWSClient
     */
    public function withINT_Fax($INT_Fax)
    {
        $new = clone $this;
        $new->INT_Fax = $INT_Fax;

        return $new;
    }
}

