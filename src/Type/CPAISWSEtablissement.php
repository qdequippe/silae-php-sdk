<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSEtablissement
{
    /**
     * @var string
     */
    private $NomInterne;

    /**
     * @var string
     */
    private $RaisonSociale;

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
    private $Complement;

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
    private $CodeOfficielCommune;

    /**
     * @var string
     */
    private $Commune;

    /**
     * @var string
     */
    private $Siret;

    /**
     * @var string
     */
    private $CodeNaf;

    /**
     * @var string
     */
    private $PaysISO;

    /**
     * @var string
     */
    private $NomPays;

    /**
     * @var string
     */
    private $Tel;

    /**
     * @var string
     */
    private $Fax;

    /**
     * @var string
     */
    private $NumeroAffiliationURSSAF;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $NbHeuresTravaillees;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    private $NbHeuresDeNuitTravaillees;

    /**
     * @var bool
     */
    private $bNbHeuresTravaillees;

    /**
     * @var int
     */
    private $EmployeurCivilite;

    /**
     * @var string
     */
    private $EmployeurNom;

    /**
     * @var string
     */
    private $EmployeurPrenom;

    /**
     * @var int
     */
    private $EmployeurQualite;

    /**
     * @var string
     */
    private $EmployeurQualiteAutre;

    /**
     * @return string
     */
    public function getNomInterne()
    {
        return $this->NomInterne;
    }

    /**
     * @param string $NomInterne
     * @return CPAISWSEtablissement
     */
    public function withNomInterne($NomInterne)
    {
        $new = clone $this;
        $new->NomInterne = $NomInterne;

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
     * @return CPAISWSEtablissement
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
    public function getNumVoie()
    {
        return $this->NumVoie;
    }

    /**
     * @param string $NumVoie
     * @return CPAISWSEtablissement
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
     * @return CPAISWSEtablissement
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
     * @return CPAISWSEtablissement
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
    public function getComplement()
    {
        return $this->Complement;
    }

    /**
     * @param string $Complement
     * @return CPAISWSEtablissement
     */
    public function withComplement($Complement)
    {
        $new = clone $this;
        $new->Complement = $Complement;

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
     * @return CPAISWSEtablissement
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
     * @return CPAISWSEtablissement
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
    public function getCodeOfficielCommune()
    {
        return $this->CodeOfficielCommune;
    }

    /**
     * @param string $CodeOfficielCommune
     * @return CPAISWSEtablissement
     */
    public function withCodeOfficielCommune($CodeOfficielCommune)
    {
        $new = clone $this;
        $new->CodeOfficielCommune = $CodeOfficielCommune;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommune()
    {
        return $this->Commune;
    }

    /**
     * @param string $Commune
     * @return CPAISWSEtablissement
     */
    public function withCommune($Commune)
    {
        $new = clone $this;
        $new->Commune = $Commune;

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
     * @return CPAISWSEtablissement
     */
    public function withSiret($Siret)
    {
        $new = clone $this;
        $new->Siret = $Siret;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeNaf()
    {
        return $this->CodeNaf;
    }

    /**
     * @param string $CodeNaf
     * @return CPAISWSEtablissement
     */
    public function withCodeNaf($CodeNaf)
    {
        $new = clone $this;
        $new->CodeNaf = $CodeNaf;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaysISO()
    {
        return $this->PaysISO;
    }

    /**
     * @param string $PaysISO
     * @return CPAISWSEtablissement
     */
    public function withPaysISO($PaysISO)
    {
        $new = clone $this;
        $new->PaysISO = $PaysISO;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomPays()
    {
        return $this->NomPays;
    }

    /**
     * @param string $NomPays
     * @return CPAISWSEtablissement
     */
    public function withNomPays($NomPays)
    {
        $new = clone $this;
        $new->NomPays = $NomPays;

        return $new;
    }

    /**
     * @return string
     */
    public function getTel()
    {
        return $this->Tel;
    }

    /**
     * @param string $Tel
     * @return CPAISWSEtablissement
     */
    public function withTel($Tel)
    {
        $new = clone $this;
        $new->Tel = $Tel;

        return $new;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return CPAISWSEtablissement
     */
    public function withFax($Fax)
    {
        $new = clone $this;
        $new->Fax = $Fax;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroAffiliationURSSAF()
    {
        return $this->NumeroAffiliationURSSAF;
    }

    /**
     * @param string $NumeroAffiliationURSSAF
     * @return CPAISWSEtablissement
     */
    public function withNumeroAffiliationURSSAF($NumeroAffiliationURSSAF)
    {
        $new = clone $this;
        $new->NumeroAffiliationURSSAF = $NumeroAffiliationURSSAF;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getNbHeuresTravaillees()
    {
        return $this->NbHeuresTravaillees;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $NbHeuresTravaillees
     * @return CPAISWSEtablissement
     */
    public function withNbHeuresTravaillees($NbHeuresTravaillees)
    {
        $new = clone $this;
        $new->NbHeuresTravaillees = $NbHeuresTravaillees;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble
     */
    public function getNbHeuresDeNuitTravaillees()
    {
        return $this->NbHeuresDeNuitTravaillees;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfDouble $NbHeuresDeNuitTravaillees
     * @return CPAISWSEtablissement
     */
    public function withNbHeuresDeNuitTravaillees($NbHeuresDeNuitTravaillees)
    {
        $new = clone $this;
        $new->NbHeuresDeNuitTravaillees = $NbHeuresDeNuitTravaillees;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBNbHeuresTravaillees()
    {
        return $this->bNbHeuresTravaillees;
    }

    /**
     * @param bool $bNbHeuresTravaillees
     * @return CPAISWSEtablissement
     */
    public function withBNbHeuresTravaillees($bNbHeuresTravaillees)
    {
        $new = clone $this;
        $new->bNbHeuresTravaillees = $bNbHeuresTravaillees;

        return $new;
    }

    /**
     * @return int
     */
    public function getEmployeurCivilite()
    {
        return $this->EmployeurCivilite;
    }

    /**
     * @param int $EmployeurCivilite
     * @return CPAISWSEtablissement
     */
    public function withEmployeurCivilite($EmployeurCivilite)
    {
        $new = clone $this;
        $new->EmployeurCivilite = $EmployeurCivilite;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmployeurNom()
    {
        return $this->EmployeurNom;
    }

    /**
     * @param string $EmployeurNom
     * @return CPAISWSEtablissement
     */
    public function withEmployeurNom($EmployeurNom)
    {
        $new = clone $this;
        $new->EmployeurNom = $EmployeurNom;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmployeurPrenom()
    {
        return $this->EmployeurPrenom;
    }

    /**
     * @param string $EmployeurPrenom
     * @return CPAISWSEtablissement
     */
    public function withEmployeurPrenom($EmployeurPrenom)
    {
        $new = clone $this;
        $new->EmployeurPrenom = $EmployeurPrenom;

        return $new;
    }

    /**
     * @return int
     */
    public function getEmployeurQualite()
    {
        return $this->EmployeurQualite;
    }

    /**
     * @param int $EmployeurQualite
     * @return CPAISWSEtablissement
     */
    public function withEmployeurQualite($EmployeurQualite)
    {
        $new = clone $this;
        $new->EmployeurQualite = $EmployeurQualite;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmployeurQualiteAutre()
    {
        return $this->EmployeurQualiteAutre;
    }

    /**
     * @param string $EmployeurQualiteAutre
     * @return CPAISWSEtablissement
     */
    public function withEmployeurQualiteAutre($EmployeurQualiteAutre)
    {
        $new = clone $this;
        $new->EmployeurQualiteAutre = $EmployeurQualiteAutre;

        return $new;
    }
}

