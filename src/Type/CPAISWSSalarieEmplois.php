<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSalarieEmplois
{
    /**
     * @var string
     */
    private $MatriculeSalarie;

    /**
     * @var string
     */
    private $NumeroSecuriteSociale;

    /**
     * @var string
     */
    private $MatriculeSalarieModele;

    /**
     * @var string
     */
    private $NumeroDossierSalarieModele;

    /**
     * @var bool
     */
    private $CopieIntegraleSalarieModele;

    /**
     * @var bool
     */
    private $CalculerElementsNaissance;

    /**
     * @var bool
     */
    private $CalculerCommune;

    /**
     * @var string
     */
    private $MatriculeInterne;

    /**
     * @var bool
     */
    private $bMatriculeInterne;

    /**
     * @var string
     */
    private $NomNaissance;

    /**
     * @var bool
     */
    private $bNomNaissance;

    /**
     * @var string
     */
    private $NomMarital;

    /**
     * @var bool
     */
    private $bNomMarital;

    /**
     * @var string
     */
    private $NomUsuel;

    /**
     * @var bool
     */
    private $bNomUsuel;

    /**
     * @var string
     */
    private $Prenom;

    /**
     * @var bool
     */
    private $bPrenom;

    /**
     * @var int
     */
    private $Civilite;

    /**
     * @var bool
     */
    private $bCivilite;

    /**
     * @var int
     */
    private $SituationFamiliale;

    /**
     * @var bool
     */
    private $bSituationFamiliale;

    /**
     * @var \DateTimeInterface
     */
    private $DateNaissance;

    /**
     * @var bool
     */
    private $bDateNaissance;

    /**
     * @var string
     */
    private $DepartementNaissance;

    /**
     * @var bool
     */
    private $bDepartementNaissance;

    /**
     * @var string
     */
    private $CommuneNaissance;

    /**
     * @var bool
     */
    private $bCommuneNaissance;

    /**
     * @var string
     */
    private $CodePaysNaissance;

    /**
     * @var bool
     */
    private $bCodePaysNaissance;

    /**
     * @var string
     */
    private $PaysNaissance;

    /**
     * @var bool
     */
    private $bPaysNaissance;

    /**
     * @var string
     */
    private $CodePaysNationalite;

    /**
     * @var bool
     */
    private $bCodePaysNationalite;

    /**
     * @var string
     */
    private $PaysNationalite;

    /**
     * @var bool
     */
    private $bPaysNationalite;

    /**
     * @var int
     */
    private $TitreSejourType;

    /**
     * @var bool
     */
    private $bTitreSejourType;

    /**
     * @var string
     */
    private $TitreSejourNumeroOrdre;

    /**
     * @var bool
     */
    private $bTitreSejourNumeroOrdre;

    /**
     * @var \DateTimeInterface
     */
    private $TitreSejourDebut;

    /**
     * @var bool
     */
    private $bTitreSejourDebut;

    /**
     * @var \DateTimeInterface
     */
    private $TitreSejourFin;

    /**
     * @var bool
     */
    private $bTitreSejourFin;

    /**
     * @var string
     */
    private $NumVoie;

    /**
     * @var bool
     */
    private $bNumVoie;

    /**
     * @var string
     */
    private $BTQC;

    /**
     * @var bool
     */
    private $bBTQC;

    /**
     * @var string
     */
    private $NomVoie;

    /**
     * @var bool
     */
    private $bNomVoie;

    /**
     * @var string
     */
    private $Complement;

    /**
     * @var bool
     */
    private $bComplement;

    /**
     * @var string
     */
    private $CodePostal;

    /**
     * @var bool
     */
    private $bCodePostal;

    /**
     * @var string
     */
    private $NomVille;

    /**
     * @var bool
     */
    private $bNomVille;

    /**
     * @var string
     */
    private $CodeOfficielCommune;

    /**
     * @var bool
     */
    private $bCodeOfficielCommune;

    /**
     * @var string
     */
    private $Commune;

    /**
     * @var bool
     */
    private $bCommune;

    /**
     * @var string
     */
    private $CodePays;

    /**
     * @var bool
     */
    private $bCodePays;

    /**
     * @var string
     */
    private $Pays;

    /**
     * @var bool
     */
    private $bPays;

    /**
     * @var bool
     */
    private $DomicilieFiscalementHorsFrance;

    /**
     * @var bool
     */
    private $bDomicilieFiscalementHorsFrance;

    /**
     * @var string
     */
    private $TelDomicile;

    /**
     * @var bool
     */
    private $bTelDomicile;

    /**
     * @var string
     */
    private $TelPortable;

    /**
     * @var bool
     */
    private $bTelPortable;

    /**
     * @var string
     */
    private $EMail;

    /**
     * @var bool
     */
    private $bEMail;

    /**
     * @var string
     */
    private $Rib;

    /**
     * @var bool
     */
    private $bRib;

    /**
     * @var string
     */
    private $IBan;

    /**
     * @var bool
     */
    private $bIBan;

    /**
     * @var string
     */
    private $Bic;

    /**
     * @var bool
     */
    private $bBic;

    /**
     * @var string
     */
    private $Affectation1;

    /**
     * @var bool
     */
    private $bAffectation1;

    /**
     * @var string
     */
    private $Affectation2;

    /**
     * @var bool
     */
    private $bAffectation2;

    /**
     * @var string
     */
    private $Affectation3;

    /**
     * @var bool
     */
    private $bAffectation3;

    /**
     * @var string
     */
    private $Affectation4;

    /**
     * @var bool
     */
    private $bAffectation4;

    /**
     * @var string
     */
    private $Affectation5;

    /**
     * @var bool
     */
    private $bAffectation5;

    /**
     * @var string
     */
    private $Affectation6;

    /**
     * @var bool
     */
    private $bAffectation6;

    /**
     * @var string
     */
    private $Affectation7;

    /**
     * @var bool
     */
    private $bAffectation7;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEmploi
     */
    private $Emplois;

    /**
     * @return string
     */
    public function getMatriculeSalarie()
    {
        return $this->MatriculeSalarie;
    }

    /**
     * @param string $MatriculeSalarie
     * @return CPAISWSSalarieEmplois
     */
    public function withMatriculeSalarie($MatriculeSalarie)
    {
        $new = clone $this;
        $new->MatriculeSalarie = $MatriculeSalarie;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroSecuriteSociale()
    {
        return $this->NumeroSecuriteSociale;
    }

    /**
     * @param string $NumeroSecuriteSociale
     * @return CPAISWSSalarieEmplois
     */
    public function withNumeroSecuriteSociale($NumeroSecuriteSociale)
    {
        $new = clone $this;
        $new->NumeroSecuriteSociale = $NumeroSecuriteSociale;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatriculeSalarieModele()
    {
        return $this->MatriculeSalarieModele;
    }

    /**
     * @param string $MatriculeSalarieModele
     * @return CPAISWSSalarieEmplois
     */
    public function withMatriculeSalarieModele($MatriculeSalarieModele)
    {
        $new = clone $this;
        $new->MatriculeSalarieModele = $MatriculeSalarieModele;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroDossierSalarieModele()
    {
        return $this->NumeroDossierSalarieModele;
    }

    /**
     * @param string $NumeroDossierSalarieModele
     * @return CPAISWSSalarieEmplois
     */
    public function withNumeroDossierSalarieModele($NumeroDossierSalarieModele)
    {
        $new = clone $this;
        $new->NumeroDossierSalarieModele = $NumeroDossierSalarieModele;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCopieIntegraleSalarieModele()
    {
        return $this->CopieIntegraleSalarieModele;
    }

    /**
     * @param bool $CopieIntegraleSalarieModele
     * @return CPAISWSSalarieEmplois
     */
    public function withCopieIntegraleSalarieModele($CopieIntegraleSalarieModele)
    {
        $new = clone $this;
        $new->CopieIntegraleSalarieModele = $CopieIntegraleSalarieModele;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCalculerElementsNaissance()
    {
        return $this->CalculerElementsNaissance;
    }

    /**
     * @param bool $CalculerElementsNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withCalculerElementsNaissance($CalculerElementsNaissance)
    {
        $new = clone $this;
        $new->CalculerElementsNaissance = $CalculerElementsNaissance;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCalculerCommune()
    {
        return $this->CalculerCommune;
    }

    /**
     * @param bool $CalculerCommune
     * @return CPAISWSSalarieEmplois
     */
    public function withCalculerCommune($CalculerCommune)
    {
        $new = clone $this;
        $new->CalculerCommune = $CalculerCommune;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatriculeInterne()
    {
        return $this->MatriculeInterne;
    }

    /**
     * @param string $MatriculeInterne
     * @return CPAISWSSalarieEmplois
     */
    public function withMatriculeInterne($MatriculeInterne)
    {
        $new = clone $this;
        $new->MatriculeInterne = $MatriculeInterne;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBMatriculeInterne()
    {
        return $this->bMatriculeInterne;
    }

    /**
     * @param bool $bMatriculeInterne
     * @return CPAISWSSalarieEmplois
     */
    public function withBMatriculeInterne($bMatriculeInterne)
    {
        $new = clone $this;
        $new->bMatriculeInterne = $bMatriculeInterne;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomNaissance()
    {
        return $this->NomNaissance;
    }

    /**
     * @param string $NomNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withNomNaissance($NomNaissance)
    {
        $new = clone $this;
        $new->NomNaissance = $NomNaissance;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBNomNaissance()
    {
        return $this->bNomNaissance;
    }

    /**
     * @param bool $bNomNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withBNomNaissance($bNomNaissance)
    {
        $new = clone $this;
        $new->bNomNaissance = $bNomNaissance;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomMarital()
    {
        return $this->NomMarital;
    }

    /**
     * @param string $NomMarital
     * @return CPAISWSSalarieEmplois
     */
    public function withNomMarital($NomMarital)
    {
        $new = clone $this;
        $new->NomMarital = $NomMarital;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBNomMarital()
    {
        return $this->bNomMarital;
    }

    /**
     * @param bool $bNomMarital
     * @return CPAISWSSalarieEmplois
     */
    public function withBNomMarital($bNomMarital)
    {
        $new = clone $this;
        $new->bNomMarital = $bNomMarital;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomUsuel()
    {
        return $this->NomUsuel;
    }

    /**
     * @param string $NomUsuel
     * @return CPAISWSSalarieEmplois
     */
    public function withNomUsuel($NomUsuel)
    {
        $new = clone $this;
        $new->NomUsuel = $NomUsuel;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBNomUsuel()
    {
        return $this->bNomUsuel;
    }

    /**
     * @param bool $bNomUsuel
     * @return CPAISWSSalarieEmplois
     */
    public function withBNomUsuel($bNomUsuel)
    {
        $new = clone $this;
        $new->bNomUsuel = $bNomUsuel;

        return $new;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param string $Prenom
     * @return CPAISWSSalarieEmplois
     */
    public function withPrenom($Prenom)
    {
        $new = clone $this;
        $new->Prenom = $Prenom;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBPrenom()
    {
        return $this->bPrenom;
    }

    /**
     * @param bool $bPrenom
     * @return CPAISWSSalarieEmplois
     */
    public function withBPrenom($bPrenom)
    {
        $new = clone $this;
        $new->bPrenom = $bPrenom;

        return $new;
    }

    /**
     * @return int
     */
    public function getCivilite()
    {
        return $this->Civilite;
    }

    /**
     * @param int $Civilite
     * @return CPAISWSSalarieEmplois
     */
    public function withCivilite($Civilite)
    {
        $new = clone $this;
        $new->Civilite = $Civilite;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCivilite()
    {
        return $this->bCivilite;
    }

    /**
     * @param bool $bCivilite
     * @return CPAISWSSalarieEmplois
     */
    public function withBCivilite($bCivilite)
    {
        $new = clone $this;
        $new->bCivilite = $bCivilite;

        return $new;
    }

    /**
     * @return int
     */
    public function getSituationFamiliale()
    {
        return $this->SituationFamiliale;
    }

    /**
     * @param int $SituationFamiliale
     * @return CPAISWSSalarieEmplois
     */
    public function withSituationFamiliale($SituationFamiliale)
    {
        $new = clone $this;
        $new->SituationFamiliale = $SituationFamiliale;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBSituationFamiliale()
    {
        return $this->bSituationFamiliale;
    }

    /**
     * @param bool $bSituationFamiliale
     * @return CPAISWSSalarieEmplois
     */
    public function withBSituationFamiliale($bSituationFamiliale)
    {
        $new = clone $this;
        $new->bSituationFamiliale = $bSituationFamiliale;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }

    /**
     * @param \DateTimeInterface $DateNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withDateNaissance($DateNaissance)
    {
        $new = clone $this;
        $new->DateNaissance = $DateNaissance;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBDateNaissance()
    {
        return $this->bDateNaissance;
    }

    /**
     * @param bool $bDateNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withBDateNaissance($bDateNaissance)
    {
        $new = clone $this;
        $new->bDateNaissance = $bDateNaissance;

        return $new;
    }

    /**
     * @return string
     */
    public function getDepartementNaissance()
    {
        return $this->DepartementNaissance;
    }

    /**
     * @param string $DepartementNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withDepartementNaissance($DepartementNaissance)
    {
        $new = clone $this;
        $new->DepartementNaissance = $DepartementNaissance;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBDepartementNaissance()
    {
        return $this->bDepartementNaissance;
    }

    /**
     * @param bool $bDepartementNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withBDepartementNaissance($bDepartementNaissance)
    {
        $new = clone $this;
        $new->bDepartementNaissance = $bDepartementNaissance;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommuneNaissance()
    {
        return $this->CommuneNaissance;
    }

    /**
     * @param string $CommuneNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withCommuneNaissance($CommuneNaissance)
    {
        $new = clone $this;
        $new->CommuneNaissance = $CommuneNaissance;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCommuneNaissance()
    {
        return $this->bCommuneNaissance;
    }

    /**
     * @param bool $bCommuneNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withBCommuneNaissance($bCommuneNaissance)
    {
        $new = clone $this;
        $new->bCommuneNaissance = $bCommuneNaissance;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodePaysNaissance()
    {
        return $this->CodePaysNaissance;
    }

    /**
     * @param string $CodePaysNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withCodePaysNaissance($CodePaysNaissance)
    {
        $new = clone $this;
        $new->CodePaysNaissance = $CodePaysNaissance;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodePaysNaissance()
    {
        return $this->bCodePaysNaissance;
    }

    /**
     * @param bool $bCodePaysNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withBCodePaysNaissance($bCodePaysNaissance)
    {
        $new = clone $this;
        $new->bCodePaysNaissance = $bCodePaysNaissance;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaysNaissance()
    {
        return $this->PaysNaissance;
    }

    /**
     * @param string $PaysNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withPaysNaissance($PaysNaissance)
    {
        $new = clone $this;
        $new->PaysNaissance = $PaysNaissance;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBPaysNaissance()
    {
        return $this->bPaysNaissance;
    }

    /**
     * @param bool $bPaysNaissance
     * @return CPAISWSSalarieEmplois
     */
    public function withBPaysNaissance($bPaysNaissance)
    {
        $new = clone $this;
        $new->bPaysNaissance = $bPaysNaissance;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodePaysNationalite()
    {
        return $this->CodePaysNationalite;
    }

    /**
     * @param string $CodePaysNationalite
     * @return CPAISWSSalarieEmplois
     */
    public function withCodePaysNationalite($CodePaysNationalite)
    {
        $new = clone $this;
        $new->CodePaysNationalite = $CodePaysNationalite;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodePaysNationalite()
    {
        return $this->bCodePaysNationalite;
    }

    /**
     * @param bool $bCodePaysNationalite
     * @return CPAISWSSalarieEmplois
     */
    public function withBCodePaysNationalite($bCodePaysNationalite)
    {
        $new = clone $this;
        $new->bCodePaysNationalite = $bCodePaysNationalite;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaysNationalite()
    {
        return $this->PaysNationalite;
    }

    /**
     * @param string $PaysNationalite
     * @return CPAISWSSalarieEmplois
     */
    public function withPaysNationalite($PaysNationalite)
    {
        $new = clone $this;
        $new->PaysNationalite = $PaysNationalite;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBPaysNationalite()
    {
        return $this->bPaysNationalite;
    }

    /**
     * @param bool $bPaysNationalite
     * @return CPAISWSSalarieEmplois
     */
    public function withBPaysNationalite($bPaysNationalite)
    {
        $new = clone $this;
        $new->bPaysNationalite = $bPaysNationalite;

        return $new;
    }

    /**
     * @return int
     */
    public function getTitreSejourType()
    {
        return $this->TitreSejourType;
    }

    /**
     * @param int $TitreSejourType
     * @return CPAISWSSalarieEmplois
     */
    public function withTitreSejourType($TitreSejourType)
    {
        $new = clone $this;
        $new->TitreSejourType = $TitreSejourType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTitreSejourType()
    {
        return $this->bTitreSejourType;
    }

    /**
     * @param bool $bTitreSejourType
     * @return CPAISWSSalarieEmplois
     */
    public function withBTitreSejourType($bTitreSejourType)
    {
        $new = clone $this;
        $new->bTitreSejourType = $bTitreSejourType;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitreSejourNumeroOrdre()
    {
        return $this->TitreSejourNumeroOrdre;
    }

    /**
     * @param string $TitreSejourNumeroOrdre
     * @return CPAISWSSalarieEmplois
     */
    public function withTitreSejourNumeroOrdre($TitreSejourNumeroOrdre)
    {
        $new = clone $this;
        $new->TitreSejourNumeroOrdre = $TitreSejourNumeroOrdre;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTitreSejourNumeroOrdre()
    {
        return $this->bTitreSejourNumeroOrdre;
    }

    /**
     * @param bool $bTitreSejourNumeroOrdre
     * @return CPAISWSSalarieEmplois
     */
    public function withBTitreSejourNumeroOrdre($bTitreSejourNumeroOrdre)
    {
        $new = clone $this;
        $new->bTitreSejourNumeroOrdre = $bTitreSejourNumeroOrdre;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTitreSejourDebut()
    {
        return $this->TitreSejourDebut;
    }

    /**
     * @param \DateTimeInterface $TitreSejourDebut
     * @return CPAISWSSalarieEmplois
     */
    public function withTitreSejourDebut($TitreSejourDebut)
    {
        $new = clone $this;
        $new->TitreSejourDebut = $TitreSejourDebut;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTitreSejourDebut()
    {
        return $this->bTitreSejourDebut;
    }

    /**
     * @param bool $bTitreSejourDebut
     * @return CPAISWSSalarieEmplois
     */
    public function withBTitreSejourDebut($bTitreSejourDebut)
    {
        $new = clone $this;
        $new->bTitreSejourDebut = $bTitreSejourDebut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTitreSejourFin()
    {
        return $this->TitreSejourFin;
    }

    /**
     * @param \DateTimeInterface $TitreSejourFin
     * @return CPAISWSSalarieEmplois
     */
    public function withTitreSejourFin($TitreSejourFin)
    {
        $new = clone $this;
        $new->TitreSejourFin = $TitreSejourFin;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTitreSejourFin()
    {
        return $this->bTitreSejourFin;
    }

    /**
     * @param bool $bTitreSejourFin
     * @return CPAISWSSalarieEmplois
     */
    public function withBTitreSejourFin($bTitreSejourFin)
    {
        $new = clone $this;
        $new->bTitreSejourFin = $bTitreSejourFin;

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
     * @return CPAISWSSalarieEmplois
     */
    public function withNumVoie($NumVoie)
    {
        $new = clone $this;
        $new->NumVoie = $NumVoie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBNumVoie()
    {
        return $this->bNumVoie;
    }

    /**
     * @param bool $bNumVoie
     * @return CPAISWSSalarieEmplois
     */
    public function withBNumVoie($bNumVoie)
    {
        $new = clone $this;
        $new->bNumVoie = $bNumVoie;

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
     * @return CPAISWSSalarieEmplois
     */
    public function withBTQC($BTQC)
    {
        $new = clone $this;
        $new->BTQC = $BTQC;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBBTQC()
    {
        return $this->bBTQC;
    }

    /**
     * @param bool $bBTQC
     * @return CPAISWSSalarieEmplois
     */
    public function withBBTQC($bBTQC)
    {
        $new = clone $this;
        $new->bBTQC = $bBTQC;

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
     * @return CPAISWSSalarieEmplois
     */
    public function withNomVoie($NomVoie)
    {
        $new = clone $this;
        $new->NomVoie = $NomVoie;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBNomVoie()
    {
        return $this->bNomVoie;
    }

    /**
     * @param bool $bNomVoie
     * @return CPAISWSSalarieEmplois
     */
    public function withBNomVoie($bNomVoie)
    {
        $new = clone $this;
        $new->bNomVoie = $bNomVoie;

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
     * @return CPAISWSSalarieEmplois
     */
    public function withComplement($Complement)
    {
        $new = clone $this;
        $new->Complement = $Complement;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBComplement()
    {
        return $this->bComplement;
    }

    /**
     * @param bool $bComplement
     * @return CPAISWSSalarieEmplois
     */
    public function withBComplement($bComplement)
    {
        $new = clone $this;
        $new->bComplement = $bComplement;

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
     * @return CPAISWSSalarieEmplois
     */
    public function withCodePostal($CodePostal)
    {
        $new = clone $this;
        $new->CodePostal = $CodePostal;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodePostal()
    {
        return $this->bCodePostal;
    }

    /**
     * @param bool $bCodePostal
     * @return CPAISWSSalarieEmplois
     */
    public function withBCodePostal($bCodePostal)
    {
        $new = clone $this;
        $new->bCodePostal = $bCodePostal;

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
     * @return CPAISWSSalarieEmplois
     */
    public function withNomVille($NomVille)
    {
        $new = clone $this;
        $new->NomVille = $NomVille;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBNomVille()
    {
        return $this->bNomVille;
    }

    /**
     * @param bool $bNomVille
     * @return CPAISWSSalarieEmplois
     */
    public function withBNomVille($bNomVille)
    {
        $new = clone $this;
        $new->bNomVille = $bNomVille;

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
     * @return CPAISWSSalarieEmplois
     */
    public function withCodeOfficielCommune($CodeOfficielCommune)
    {
        $new = clone $this;
        $new->CodeOfficielCommune = $CodeOfficielCommune;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodeOfficielCommune()
    {
        return $this->bCodeOfficielCommune;
    }

    /**
     * @param bool $bCodeOfficielCommune
     * @return CPAISWSSalarieEmplois
     */
    public function withBCodeOfficielCommune($bCodeOfficielCommune)
    {
        $new = clone $this;
        $new->bCodeOfficielCommune = $bCodeOfficielCommune;

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
     * @return CPAISWSSalarieEmplois
     */
    public function withCommune($Commune)
    {
        $new = clone $this;
        $new->Commune = $Commune;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCommune()
    {
        return $this->bCommune;
    }

    /**
     * @param bool $bCommune
     * @return CPAISWSSalarieEmplois
     */
    public function withBCommune($bCommune)
    {
        $new = clone $this;
        $new->bCommune = $bCommune;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodePays()
    {
        return $this->CodePays;
    }

    /**
     * @param string $CodePays
     * @return CPAISWSSalarieEmplois
     */
    public function withCodePays($CodePays)
    {
        $new = clone $this;
        $new->CodePays = $CodePays;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBCodePays()
    {
        return $this->bCodePays;
    }

    /**
     * @param bool $bCodePays
     * @return CPAISWSSalarieEmplois
     */
    public function withBCodePays($bCodePays)
    {
        $new = clone $this;
        $new->bCodePays = $bCodePays;

        return $new;
    }

    /**
     * @return string
     */
    public function getPays()
    {
        return $this->Pays;
    }

    /**
     * @param string $Pays
     * @return CPAISWSSalarieEmplois
     */
    public function withPays($Pays)
    {
        $new = clone $this;
        $new->Pays = $Pays;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBPays()
    {
        return $this->bPays;
    }

    /**
     * @param bool $bPays
     * @return CPAISWSSalarieEmplois
     */
    public function withBPays($bPays)
    {
        $new = clone $this;
        $new->bPays = $bPays;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDomicilieFiscalementHorsFrance()
    {
        return $this->DomicilieFiscalementHorsFrance;
    }

    /**
     * @param bool $DomicilieFiscalementHorsFrance
     * @return CPAISWSSalarieEmplois
     */
    public function withDomicilieFiscalementHorsFrance($DomicilieFiscalementHorsFrance)
    {
        $new = clone $this;
        $new->DomicilieFiscalementHorsFrance = $DomicilieFiscalementHorsFrance;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBDomicilieFiscalementHorsFrance()
    {
        return $this->bDomicilieFiscalementHorsFrance;
    }

    /**
     * @param bool $bDomicilieFiscalementHorsFrance
     * @return CPAISWSSalarieEmplois
     */
    public function withBDomicilieFiscalementHorsFrance($bDomicilieFiscalementHorsFrance)
    {
        $new = clone $this;
        $new->bDomicilieFiscalementHorsFrance = $bDomicilieFiscalementHorsFrance;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelDomicile()
    {
        return $this->TelDomicile;
    }

    /**
     * @param string $TelDomicile
     * @return CPAISWSSalarieEmplois
     */
    public function withTelDomicile($TelDomicile)
    {
        $new = clone $this;
        $new->TelDomicile = $TelDomicile;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTelDomicile()
    {
        return $this->bTelDomicile;
    }

    /**
     * @param bool $bTelDomicile
     * @return CPAISWSSalarieEmplois
     */
    public function withBTelDomicile($bTelDomicile)
    {
        $new = clone $this;
        $new->bTelDomicile = $bTelDomicile;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelPortable()
    {
        return $this->TelPortable;
    }

    /**
     * @param string $TelPortable
     * @return CPAISWSSalarieEmplois
     */
    public function withTelPortable($TelPortable)
    {
        $new = clone $this;
        $new->TelPortable = $TelPortable;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBTelPortable()
    {
        return $this->bTelPortable;
    }

    /**
     * @param bool $bTelPortable
     * @return CPAISWSSalarieEmplois
     */
    public function withBTelPortable($bTelPortable)
    {
        $new = clone $this;
        $new->bTelPortable = $bTelPortable;

        return $new;
    }

    /**
     * @return string
     */
    public function getEMail()
    {
        return $this->EMail;
    }

    /**
     * @param string $EMail
     * @return CPAISWSSalarieEmplois
     */
    public function withEMail($EMail)
    {
        $new = clone $this;
        $new->EMail = $EMail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBEMail()
    {
        return $this->bEMail;
    }

    /**
     * @param bool $bEMail
     * @return CPAISWSSalarieEmplois
     */
    public function withBEMail($bEMail)
    {
        $new = clone $this;
        $new->bEMail = $bEMail;

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
     * @return CPAISWSSalarieEmplois
     */
    public function withRib($Rib)
    {
        $new = clone $this;
        $new->Rib = $Rib;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBRib()
    {
        return $this->bRib;
    }

    /**
     * @param bool $bRib
     * @return CPAISWSSalarieEmplois
     */
    public function withBRib($bRib)
    {
        $new = clone $this;
        $new->bRib = $bRib;

        return $new;
    }

    /**
     * @return string
     */
    public function getIBan()
    {
        return $this->IBan;
    }

    /**
     * @param string $IBan
     * @return CPAISWSSalarieEmplois
     */
    public function withIBan($IBan)
    {
        $new = clone $this;
        $new->IBan = $IBan;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBIBan()
    {
        return $this->bIBan;
    }

    /**
     * @param bool $bIBan
     * @return CPAISWSSalarieEmplois
     */
    public function withBIBan($bIBan)
    {
        $new = clone $this;
        $new->bIBan = $bIBan;

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
     * @return CPAISWSSalarieEmplois
     */
    public function withBic($Bic)
    {
        $new = clone $this;
        $new->Bic = $Bic;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBBic()
    {
        return $this->bBic;
    }

    /**
     * @param bool $bBic
     * @return CPAISWSSalarieEmplois
     */
    public function withBBic($bBic)
    {
        $new = clone $this;
        $new->bBic = $bBic;

        return $new;
    }

    /**
     * @return string
     */
    public function getAffectation1()
    {
        return $this->Affectation1;
    }

    /**
     * @param string $Affectation1
     * @return CPAISWSSalarieEmplois
     */
    public function withAffectation1($Affectation1)
    {
        $new = clone $this;
        $new->Affectation1 = $Affectation1;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBAffectation1()
    {
        return $this->bAffectation1;
    }

    /**
     * @param bool $bAffectation1
     * @return CPAISWSSalarieEmplois
     */
    public function withBAffectation1($bAffectation1)
    {
        $new = clone $this;
        $new->bAffectation1 = $bAffectation1;

        return $new;
    }

    /**
     * @return string
     */
    public function getAffectation2()
    {
        return $this->Affectation2;
    }

    /**
     * @param string $Affectation2
     * @return CPAISWSSalarieEmplois
     */
    public function withAffectation2($Affectation2)
    {
        $new = clone $this;
        $new->Affectation2 = $Affectation2;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBAffectation2()
    {
        return $this->bAffectation2;
    }

    /**
     * @param bool $bAffectation2
     * @return CPAISWSSalarieEmplois
     */
    public function withBAffectation2($bAffectation2)
    {
        $new = clone $this;
        $new->bAffectation2 = $bAffectation2;

        return $new;
    }

    /**
     * @return string
     */
    public function getAffectation3()
    {
        return $this->Affectation3;
    }

    /**
     * @param string $Affectation3
     * @return CPAISWSSalarieEmplois
     */
    public function withAffectation3($Affectation3)
    {
        $new = clone $this;
        $new->Affectation3 = $Affectation3;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBAffectation3()
    {
        return $this->bAffectation3;
    }

    /**
     * @param bool $bAffectation3
     * @return CPAISWSSalarieEmplois
     */
    public function withBAffectation3($bAffectation3)
    {
        $new = clone $this;
        $new->bAffectation3 = $bAffectation3;

        return $new;
    }

    /**
     * @return string
     */
    public function getAffectation4()
    {
        return $this->Affectation4;
    }

    /**
     * @param string $Affectation4
     * @return CPAISWSSalarieEmplois
     */
    public function withAffectation4($Affectation4)
    {
        $new = clone $this;
        $new->Affectation4 = $Affectation4;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBAffectation4()
    {
        return $this->bAffectation4;
    }

    /**
     * @param bool $bAffectation4
     * @return CPAISWSSalarieEmplois
     */
    public function withBAffectation4($bAffectation4)
    {
        $new = clone $this;
        $new->bAffectation4 = $bAffectation4;

        return $new;
    }

    /**
     * @return string
     */
    public function getAffectation5()
    {
        return $this->Affectation5;
    }

    /**
     * @param string $Affectation5
     * @return CPAISWSSalarieEmplois
     */
    public function withAffectation5($Affectation5)
    {
        $new = clone $this;
        $new->Affectation5 = $Affectation5;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBAffectation5()
    {
        return $this->bAffectation5;
    }

    /**
     * @param bool $bAffectation5
     * @return CPAISWSSalarieEmplois
     */
    public function withBAffectation5($bAffectation5)
    {
        $new = clone $this;
        $new->bAffectation5 = $bAffectation5;

        return $new;
    }

    /**
     * @return string
     */
    public function getAffectation6()
    {
        return $this->Affectation6;
    }

    /**
     * @param string $Affectation6
     * @return CPAISWSSalarieEmplois
     */
    public function withAffectation6($Affectation6)
    {
        $new = clone $this;
        $new->Affectation6 = $Affectation6;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBAffectation6()
    {
        return $this->bAffectation6;
    }

    /**
     * @param bool $bAffectation6
     * @return CPAISWSSalarieEmplois
     */
    public function withBAffectation6($bAffectation6)
    {
        $new = clone $this;
        $new->bAffectation6 = $bAffectation6;

        return $new;
    }

    /**
     * @return string
     */
    public function getAffectation7()
    {
        return $this->Affectation7;
    }

    /**
     * @param string $Affectation7
     * @return CPAISWSSalarieEmplois
     */
    public function withAffectation7($Affectation7)
    {
        $new = clone $this;
        $new->Affectation7 = $Affectation7;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBAffectation7()
    {
        return $this->bAffectation7;
    }

    /**
     * @param bool $bAffectation7
     * @return CPAISWSSalarieEmplois
     */
    public function withBAffectation7($bAffectation7)
    {
        $new = clone $this;
        $new->bAffectation7 = $bAffectation7;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEmploi
     */
    public function getEmplois()
    {
        return $this->Emplois;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEmploi $Emplois
     * @return CPAISWSSalarieEmplois
     */
    public function withEmplois($Emplois)
    {
        $new = clone $this;
        $new->Emplois = $Emplois;

        return $new;
    }
}

