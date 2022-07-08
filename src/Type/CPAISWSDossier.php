<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSDossier
{
    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var string
     */
    private $NumeroDossierModele;

    /**
     * @var \DateTimeInterface
     */
    private $DateDebutMontage;

    /**
     * @var string
     */
    private $CodeAgence;

    /**
     * @var int
     */
    private $LongueurMatricule;

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
     * @var string
     */
    private $Groupe;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEtablissement
     */
    private $Etablissements;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSDossier
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroDossierModele()
    {
        return $this->NumeroDossierModele;
    }

    /**
     * @param string $NumeroDossierModele
     * @return CPAISWSDossier
     */
    public function withNumeroDossierModele($NumeroDossierModele)
    {
        $new = clone $this;
        $new->NumeroDossierModele = $NumeroDossierModele;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateDebutMontage()
    {
        return $this->DateDebutMontage;
    }

    /**
     * @param \DateTimeInterface $DateDebutMontage
     * @return CPAISWSDossier
     */
    public function withDateDebutMontage($DateDebutMontage)
    {
        $new = clone $this;
        $new->DateDebutMontage = $DateDebutMontage;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeAgence()
    {
        return $this->CodeAgence;
    }

    /**
     * @param string $CodeAgence
     * @return CPAISWSDossier
     */
    public function withCodeAgence($CodeAgence)
    {
        $new = clone $this;
        $new->CodeAgence = $CodeAgence;

        return $new;
    }

    /**
     * @return int
     */
    public function getLongueurMatricule()
    {
        return $this->LongueurMatricule;
    }

    /**
     * @param int $LongueurMatricule
     * @return CPAISWSDossier
     */
    public function withLongueurMatricule($LongueurMatricule)
    {
        $new = clone $this;
        $new->LongueurMatricule = $LongueurMatricule;

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
     * @return CPAISWSDossier
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
     * @return CPAISWSDossier
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
     * @return CPAISWSDossier
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
     * @return CPAISWSDossier
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
     * @return CPAISWSDossier
     */
    public function withEmployeurQualiteAutre($EmployeurQualiteAutre)
    {
        $new = clone $this;
        $new->EmployeurQualiteAutre = $EmployeurQualiteAutre;

        return $new;
    }

    /**
     * @return string
     */
    public function getGroupe()
    {
        return $this->Groupe;
    }

    /**
     * @param string $Groupe
     * @return CPAISWSDossier
     */
    public function withGroupe($Groupe)
    {
        $new = clone $this;
        $new->Groupe = $Groupe;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEtablissement
     */
    public function getEtablissements()
    {
        return $this->Etablissements;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEtablissement $Etablissements
     * @return CPAISWSDossier
     */
    public function withEtablissements($Etablissements)
    {
        $new = clone $this;
        $new->Etablissements = $Etablissements;

        return $new;
    }
}

