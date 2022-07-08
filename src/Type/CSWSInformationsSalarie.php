<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CSWSInformationsSalarie
{
    /**
     * @var string
     */
    private $SAL_NOMAFFICHE;

    /**
     * @var string
     */
    private $SAL_MATRICULE;

    /**
     * @var string
     */
    private $SAL_NUMEROSS;

    /**
     * @var string
     */
    private $SAL_ADR1;

    /**
     * @var string
     */
    private $SAL_ADR2;

    /**
     * @var string
     */
    private $SAL_ADR3;

    /**
     * @var string
     */
    private $STE_CPSUPLIBELLE;

    /**
     * @var string
     */
    private $STE_CPSUP2LIBELLE;

    /**
     * @var string
     */
    private $SAL_SUPERVISEUR;

    /**
     * @var bool
     */
    private $PeutSaisir;

    /**
     * @var string
     */
    private $SAL_LIBPERIODEREF;

    /**
     * @var float
     */
    private $SAL_CPN1ACQUIS;

    /**
     * @var float
     */
    private $SAL_CPN1PRIS;

    /**
     * @var float
     */
    private $SAL_CPN1DEMANDE;

    /**
     * @var float
     */
    private $SAL_CPN1SOLDE;

    /**
     * @var float
     */
    private $SAL_CPNACQUIS;

    /**
     * @var float
     */
    private $SAL_CPNPRIS;

    /**
     * @var float
     */
    private $SAL_CPNDEMANDE;

    /**
     * @var float
     */
    private $SAL_CPNSOLDE;

    /**
     * @var float
     */
    private $SAL_RTTACQUIS;

    /**
     * @var float
     */
    private $SAL_RTTPRIS;

    /**
     * @var float
     */
    private $SAL_RTTDEMANDE;

    /**
     * @var float
     */
    private $SAL_RTTSOLDE;

    /**
     * @var float
     */
    private $SAL_CPSUPACQUIS;

    /**
     * @var float
     */
    private $SAL_CPSUPPRIS;

    /**
     * @var float
     */
    private $SAL_CPSUPDEMANDE;

    /**
     * @var float
     */
    private $SAL_CPSUPSOLDE;

    /**
     * @var float
     */
    private $SAL_CPSUP2ACQUIS;

    /**
     * @var float
     */
    private $SAL_CPSUP2PRIS;

    /**
     * @var float
     */
    private $SAL_CPSUP2DEMANDE;

    /**
     * @var float
     */
    private $SAL_CPSUP2SOLDE;

    /**
     * @var float
     */
    private $SAL_DIFACQUIS;

    /**
     * @var float
     */
    private $SAL_DIFPRIS;

    /**
     * @var float
     */
    private $SAL_DIFACQUISFUTUR;

    /**
     * @var float
     */
    private $SAL_DIFSOLDE;

    /**
     * @return string
     */
    public function getSAL_NOMAFFICHE()
    {
        return $this->SAL_NOMAFFICHE;
    }

    /**
     * @param string $SAL_NOMAFFICHE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_NOMAFFICHE($SAL_NOMAFFICHE)
    {
        $new = clone $this;
        $new->SAL_NOMAFFICHE = $SAL_NOMAFFICHE;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_MATRICULE()
    {
        return $this->SAL_MATRICULE;
    }

    /**
     * @param string $SAL_MATRICULE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_MATRICULE($SAL_MATRICULE)
    {
        $new = clone $this;
        $new->SAL_MATRICULE = $SAL_MATRICULE;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_NUMEROSS()
    {
        return $this->SAL_NUMEROSS;
    }

    /**
     * @param string $SAL_NUMEROSS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_NUMEROSS($SAL_NUMEROSS)
    {
        $new = clone $this;
        $new->SAL_NUMEROSS = $SAL_NUMEROSS;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_ADR1()
    {
        return $this->SAL_ADR1;
    }

    /**
     * @param string $SAL_ADR1
     * @return CSWSInformationsSalarie
     */
    public function withSAL_ADR1($SAL_ADR1)
    {
        $new = clone $this;
        $new->SAL_ADR1 = $SAL_ADR1;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_ADR2()
    {
        return $this->SAL_ADR2;
    }

    /**
     * @param string $SAL_ADR2
     * @return CSWSInformationsSalarie
     */
    public function withSAL_ADR2($SAL_ADR2)
    {
        $new = clone $this;
        $new->SAL_ADR2 = $SAL_ADR2;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_ADR3()
    {
        return $this->SAL_ADR3;
    }

    /**
     * @param string $SAL_ADR3
     * @return CSWSInformationsSalarie
     */
    public function withSAL_ADR3($SAL_ADR3)
    {
        $new = clone $this;
        $new->SAL_ADR3 = $SAL_ADR3;

        return $new;
    }

    /**
     * @return string
     */
    public function getSTE_CPSUPLIBELLE()
    {
        return $this->STE_CPSUPLIBELLE;
    }

    /**
     * @param string $STE_CPSUPLIBELLE
     * @return CSWSInformationsSalarie
     */
    public function withSTE_CPSUPLIBELLE($STE_CPSUPLIBELLE)
    {
        $new = clone $this;
        $new->STE_CPSUPLIBELLE = $STE_CPSUPLIBELLE;

        return $new;
    }

    /**
     * @return string
     */
    public function getSTE_CPSUP2LIBELLE()
    {
        return $this->STE_CPSUP2LIBELLE;
    }

    /**
     * @param string $STE_CPSUP2LIBELLE
     * @return CSWSInformationsSalarie
     */
    public function withSTE_CPSUP2LIBELLE($STE_CPSUP2LIBELLE)
    {
        $new = clone $this;
        $new->STE_CPSUP2LIBELLE = $STE_CPSUP2LIBELLE;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_SUPERVISEUR()
    {
        return $this->SAL_SUPERVISEUR;
    }

    /**
     * @param string $SAL_SUPERVISEUR
     * @return CSWSInformationsSalarie
     */
    public function withSAL_SUPERVISEUR($SAL_SUPERVISEUR)
    {
        $new = clone $this;
        $new->SAL_SUPERVISEUR = $SAL_SUPERVISEUR;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPeutSaisir()
    {
        return $this->PeutSaisir;
    }

    /**
     * @param bool $PeutSaisir
     * @return CSWSInformationsSalarie
     */
    public function withPeutSaisir($PeutSaisir)
    {
        $new = clone $this;
        $new->PeutSaisir = $PeutSaisir;

        return $new;
    }

    /**
     * @return string
     */
    public function getSAL_LIBPERIODEREF()
    {
        return $this->SAL_LIBPERIODEREF;
    }

    /**
     * @param string $SAL_LIBPERIODEREF
     * @return CSWSInformationsSalarie
     */
    public function withSAL_LIBPERIODEREF($SAL_LIBPERIODEREF)
    {
        $new = clone $this;
        $new->SAL_LIBPERIODEREF = $SAL_LIBPERIODEREF;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPN1ACQUIS()
    {
        return $this->SAL_CPN1ACQUIS;
    }

    /**
     * @param float $SAL_CPN1ACQUIS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPN1ACQUIS($SAL_CPN1ACQUIS)
    {
        $new = clone $this;
        $new->SAL_CPN1ACQUIS = $SAL_CPN1ACQUIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPN1PRIS()
    {
        return $this->SAL_CPN1PRIS;
    }

    /**
     * @param float $SAL_CPN1PRIS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPN1PRIS($SAL_CPN1PRIS)
    {
        $new = clone $this;
        $new->SAL_CPN1PRIS = $SAL_CPN1PRIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPN1DEMANDE()
    {
        return $this->SAL_CPN1DEMANDE;
    }

    /**
     * @param float $SAL_CPN1DEMANDE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPN1DEMANDE($SAL_CPN1DEMANDE)
    {
        $new = clone $this;
        $new->SAL_CPN1DEMANDE = $SAL_CPN1DEMANDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPN1SOLDE()
    {
        return $this->SAL_CPN1SOLDE;
    }

    /**
     * @param float $SAL_CPN1SOLDE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPN1SOLDE($SAL_CPN1SOLDE)
    {
        $new = clone $this;
        $new->SAL_CPN1SOLDE = $SAL_CPN1SOLDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPNACQUIS()
    {
        return $this->SAL_CPNACQUIS;
    }

    /**
     * @param float $SAL_CPNACQUIS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPNACQUIS($SAL_CPNACQUIS)
    {
        $new = clone $this;
        $new->SAL_CPNACQUIS = $SAL_CPNACQUIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPNPRIS()
    {
        return $this->SAL_CPNPRIS;
    }

    /**
     * @param float $SAL_CPNPRIS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPNPRIS($SAL_CPNPRIS)
    {
        $new = clone $this;
        $new->SAL_CPNPRIS = $SAL_CPNPRIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPNDEMANDE()
    {
        return $this->SAL_CPNDEMANDE;
    }

    /**
     * @param float $SAL_CPNDEMANDE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPNDEMANDE($SAL_CPNDEMANDE)
    {
        $new = clone $this;
        $new->SAL_CPNDEMANDE = $SAL_CPNDEMANDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPNSOLDE()
    {
        return $this->SAL_CPNSOLDE;
    }

    /**
     * @param float $SAL_CPNSOLDE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPNSOLDE($SAL_CPNSOLDE)
    {
        $new = clone $this;
        $new->SAL_CPNSOLDE = $SAL_CPNSOLDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_RTTACQUIS()
    {
        return $this->SAL_RTTACQUIS;
    }

    /**
     * @param float $SAL_RTTACQUIS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_RTTACQUIS($SAL_RTTACQUIS)
    {
        $new = clone $this;
        $new->SAL_RTTACQUIS = $SAL_RTTACQUIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_RTTPRIS()
    {
        return $this->SAL_RTTPRIS;
    }

    /**
     * @param float $SAL_RTTPRIS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_RTTPRIS($SAL_RTTPRIS)
    {
        $new = clone $this;
        $new->SAL_RTTPRIS = $SAL_RTTPRIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_RTTDEMANDE()
    {
        return $this->SAL_RTTDEMANDE;
    }

    /**
     * @param float $SAL_RTTDEMANDE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_RTTDEMANDE($SAL_RTTDEMANDE)
    {
        $new = clone $this;
        $new->SAL_RTTDEMANDE = $SAL_RTTDEMANDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_RTTSOLDE()
    {
        return $this->SAL_RTTSOLDE;
    }

    /**
     * @param float $SAL_RTTSOLDE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_RTTSOLDE($SAL_RTTSOLDE)
    {
        $new = clone $this;
        $new->SAL_RTTSOLDE = $SAL_RTTSOLDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUPACQUIS()
    {
        return $this->SAL_CPSUPACQUIS;
    }

    /**
     * @param float $SAL_CPSUPACQUIS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPSUPACQUIS($SAL_CPSUPACQUIS)
    {
        $new = clone $this;
        $new->SAL_CPSUPACQUIS = $SAL_CPSUPACQUIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUPPRIS()
    {
        return $this->SAL_CPSUPPRIS;
    }

    /**
     * @param float $SAL_CPSUPPRIS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPSUPPRIS($SAL_CPSUPPRIS)
    {
        $new = clone $this;
        $new->SAL_CPSUPPRIS = $SAL_CPSUPPRIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUPDEMANDE()
    {
        return $this->SAL_CPSUPDEMANDE;
    }

    /**
     * @param float $SAL_CPSUPDEMANDE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPSUPDEMANDE($SAL_CPSUPDEMANDE)
    {
        $new = clone $this;
        $new->SAL_CPSUPDEMANDE = $SAL_CPSUPDEMANDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUPSOLDE()
    {
        return $this->SAL_CPSUPSOLDE;
    }

    /**
     * @param float $SAL_CPSUPSOLDE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPSUPSOLDE($SAL_CPSUPSOLDE)
    {
        $new = clone $this;
        $new->SAL_CPSUPSOLDE = $SAL_CPSUPSOLDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUP2ACQUIS()
    {
        return $this->SAL_CPSUP2ACQUIS;
    }

    /**
     * @param float $SAL_CPSUP2ACQUIS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPSUP2ACQUIS($SAL_CPSUP2ACQUIS)
    {
        $new = clone $this;
        $new->SAL_CPSUP2ACQUIS = $SAL_CPSUP2ACQUIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUP2PRIS()
    {
        return $this->SAL_CPSUP2PRIS;
    }

    /**
     * @param float $SAL_CPSUP2PRIS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPSUP2PRIS($SAL_CPSUP2PRIS)
    {
        $new = clone $this;
        $new->SAL_CPSUP2PRIS = $SAL_CPSUP2PRIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUP2DEMANDE()
    {
        return $this->SAL_CPSUP2DEMANDE;
    }

    /**
     * @param float $SAL_CPSUP2DEMANDE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPSUP2DEMANDE($SAL_CPSUP2DEMANDE)
    {
        $new = clone $this;
        $new->SAL_CPSUP2DEMANDE = $SAL_CPSUP2DEMANDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_CPSUP2SOLDE()
    {
        return $this->SAL_CPSUP2SOLDE;
    }

    /**
     * @param float $SAL_CPSUP2SOLDE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_CPSUP2SOLDE($SAL_CPSUP2SOLDE)
    {
        $new = clone $this;
        $new->SAL_CPSUP2SOLDE = $SAL_CPSUP2SOLDE;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_DIFACQUIS()
    {
        return $this->SAL_DIFACQUIS;
    }

    /**
     * @param float $SAL_DIFACQUIS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_DIFACQUIS($SAL_DIFACQUIS)
    {
        $new = clone $this;
        $new->SAL_DIFACQUIS = $SAL_DIFACQUIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_DIFPRIS()
    {
        return $this->SAL_DIFPRIS;
    }

    /**
     * @param float $SAL_DIFPRIS
     * @return CSWSInformationsSalarie
     */
    public function withSAL_DIFPRIS($SAL_DIFPRIS)
    {
        $new = clone $this;
        $new->SAL_DIFPRIS = $SAL_DIFPRIS;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_DIFACQUISFUTUR()
    {
        return $this->SAL_DIFACQUISFUTUR;
    }

    /**
     * @param float $SAL_DIFACQUISFUTUR
     * @return CSWSInformationsSalarie
     */
    public function withSAL_DIFACQUISFUTUR($SAL_DIFACQUISFUTUR)
    {
        $new = clone $this;
        $new->SAL_DIFACQUISFUTUR = $SAL_DIFACQUISFUTUR;

        return $new;
    }

    /**
     * @return float
     */
    public function getSAL_DIFSOLDE()
    {
        return $this->SAL_DIFSOLDE;
    }

    /**
     * @param float $SAL_DIFSOLDE
     * @return CSWSInformationsSalarie
     */
    public function withSAL_DIFSOLDE($SAL_DIFSOLDE)
    {
        $new = clone $this;
        $new->SAL_DIFSOLDE = $SAL_DIFSOLDE;

        return $new;
    }
}

