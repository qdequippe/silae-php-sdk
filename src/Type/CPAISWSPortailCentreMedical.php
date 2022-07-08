<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSPortailCentreMedical
{
    /**
     * @var bool
     */
    private $EstLOrganisme;

    /**
     * @var string
     */
    private $CodeMT;

    /**
     * @var string
     */
    private $Nom;

    /**
     * @var string
     */
    private $CodePostal;

    /**
     * @var string
     */
    private $NumVoie;

    /**
     * @var string
     */
    private $BTQC;

    /**
     * @var string
     */
    private $NomVoie;

    /**
     * @var string
     */
    private $ComplementAdresse;

    /**
     * @var string
     */
    private $NomVille;

    /**
     * @var string
     */
    private $Telephone;

    /**
     * @var string
     */
    private $Mail;

    /**
     * @return bool
     */
    public function getEstLOrganisme()
    {
        return $this->EstLOrganisme;
    }

    /**
     * @param bool $EstLOrganisme
     * @return CPAISWSPortailCentreMedical
     */
    public function withEstLOrganisme($EstLOrganisme)
    {
        $new = clone $this;
        $new->EstLOrganisme = $EstLOrganisme;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeMT()
    {
        return $this->CodeMT;
    }

    /**
     * @param string $CodeMT
     * @return CPAISWSPortailCentreMedical
     */
    public function withCodeMT($CodeMT)
    {
        $new = clone $this;
        $new->CodeMT = $CodeMT;

        return $new;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param string $Nom
     * @return CPAISWSPortailCentreMedical
     */
    public function withNom($Nom)
    {
        $new = clone $this;
        $new->Nom = $Nom;

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
     * @return CPAISWSPortailCentreMedical
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
    public function getNumVoie()
    {
        return $this->NumVoie;
    }

    /**
     * @param string $NumVoie
     * @return CPAISWSPortailCentreMedical
     */
    public function withNumVoie($NumVoie)
    {
        $new = clone $this;
        $new->NumVoie = $NumVoie;

        return $new;
    }

    /**
     * @return string
     */
    public function getBTQC()
    {
        return $this->BTQC;
    }

    /**
     * @param string $BTQC
     * @return CPAISWSPortailCentreMedical
     */
    public function withBTQC($BTQC)
    {
        $new = clone $this;
        $new->BTQC = $BTQC;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomVoie()
    {
        return $this->NomVoie;
    }

    /**
     * @param string $NomVoie
     * @return CPAISWSPortailCentreMedical
     */
    public function withNomVoie($NomVoie)
    {
        $new = clone $this;
        $new->NomVoie = $NomVoie;

        return $new;
    }

    /**
     * @return string
     */
    public function getComplementAdresse()
    {
        return $this->ComplementAdresse;
    }

    /**
     * @param string $ComplementAdresse
     * @return CPAISWSPortailCentreMedical
     */
    public function withComplementAdresse($ComplementAdresse)
    {
        $new = clone $this;
        $new->ComplementAdresse = $ComplementAdresse;

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
     * @return CPAISWSPortailCentreMedical
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
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * @param string $Telephone
     * @return CPAISWSPortailCentreMedical
     */
    public function withTelephone($Telephone)
    {
        $new = clone $this;
        $new->Telephone = $Telephone;

        return $new;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param string $Mail
     * @return CPAISWSPortailCentreMedical
     */
    public function withMail($Mail)
    {
        $new = clone $this;
        $new->Mail = $Mail;

        return $new;
    }
}

