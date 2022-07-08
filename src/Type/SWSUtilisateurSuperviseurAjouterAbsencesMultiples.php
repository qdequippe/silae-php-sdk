<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSuperviseurAjouterAbsencesMultiples implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var int
     */
    private $ID_DOMAINE;

    /**
     * @var int
     */
    private $ID_SUPERVISEUR;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfInt
     */
    private $ID_PAISALARIEs;

    /**
     * @var \DateTimeInterface
     */
    private $ABS_DtDeb;

    /**
     * @var \DateTimeInterface
     */
    private $ABS_DtFin;

    /**
     * @var float
     */
    private $ABS_Duree;

    /**
     * @var float
     */
    private $ABS_DureeJ;

    /**
     * @var string
     */
    private $ABS_CodeAbsence;

    /**
     * @var string
     */
    private $ABS_Commentaire1;

    /**
     * @var string
     */
    private $ABS_Commentaire2;

    /**
     * @var string
     */
    private $ABS_Commentaire3;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_SUPERVISEUR
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfInt $ID_PAISALARIEs
     * @var \DateTimeInterface $ABS_DtDeb
     * @var \DateTimeInterface $ABS_DtFin
     * @var float $ABS_Duree
     * @var float $ABS_DureeJ
     * @var string $ABS_CodeAbsence
     * @var string $ABS_Commentaire1
     * @var string $ABS_Commentaire2
     * @var string $ABS_Commentaire3
     */
    public function __construct($Token, $ID_DOMAINE, $ID_SUPERVISEUR, $ID_PAISALARIEs, $ABS_DtDeb, $ABS_DtFin, $ABS_Duree, $ABS_DureeJ, $ABS_CodeAbsence, $ABS_Commentaire1, $ABS_Commentaire2, $ABS_Commentaire3)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_SUPERVISEUR = $ID_SUPERVISEUR;
        $this->ID_PAISALARIEs = $ID_PAISALARIEs;
        $this->ABS_DtDeb = $ABS_DtDeb;
        $this->ABS_DtFin = $ABS_DtFin;
        $this->ABS_Duree = $ABS_Duree;
        $this->ABS_DureeJ = $ABS_DureeJ;
        $this->ABS_CodeAbsence = $ABS_CodeAbsence;
        $this->ABS_Commentaire1 = $ABS_Commentaire1;
        $this->ABS_Commentaire2 = $ABS_Commentaire2;
        $this->ABS_Commentaire3 = $ABS_Commentaire3;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiples
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_DOMAINE()
    {
        return $this->ID_DOMAINE;
    }

    /**
     * @param int $ID_DOMAINE
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiples
     */
    public function withID_DOMAINE($ID_DOMAINE)
    {
        $new = clone $this;
        $new->ID_DOMAINE = $ID_DOMAINE;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_SUPERVISEUR()
    {
        return $this->ID_SUPERVISEUR;
    }

    /**
     * @param int $ID_SUPERVISEUR
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiples
     */
    public function withID_SUPERVISEUR($ID_SUPERVISEUR)
    {
        $new = clone $this;
        $new->ID_SUPERVISEUR = $ID_SUPERVISEUR;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfInt
     */
    public function getID_PAISALARIEs()
    {
        return $this->ID_PAISALARIEs;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfInt $ID_PAISALARIEs
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiples
     */
    public function withID_PAISALARIEs($ID_PAISALARIEs)
    {
        $new = clone $this;
        $new->ID_PAISALARIEs = $ID_PAISALARIEs;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getABS_DtDeb()
    {
        return $this->ABS_DtDeb;
    }

    /**
     * @param \DateTimeInterface $ABS_DtDeb
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiples
     */
    public function withABS_DtDeb($ABS_DtDeb)
    {
        $new = clone $this;
        $new->ABS_DtDeb = $ABS_DtDeb;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getABS_DtFin()
    {
        return $this->ABS_DtFin;
    }

    /**
     * @param \DateTimeInterface $ABS_DtFin
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiples
     */
    public function withABS_DtFin($ABS_DtFin)
    {
        $new = clone $this;
        $new->ABS_DtFin = $ABS_DtFin;

        return $new;
    }

    /**
     * @return float
     */
    public function getABS_Duree()
    {
        return $this->ABS_Duree;
    }

    /**
     * @param float $ABS_Duree
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiples
     */
    public function withABS_Duree($ABS_Duree)
    {
        $new = clone $this;
        $new->ABS_Duree = $ABS_Duree;

        return $new;
    }

    /**
     * @return float
     */
    public function getABS_DureeJ()
    {
        return $this->ABS_DureeJ;
    }

    /**
     * @param float $ABS_DureeJ
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiples
     */
    public function withABS_DureeJ($ABS_DureeJ)
    {
        $new = clone $this;
        $new->ABS_DureeJ = $ABS_DureeJ;

        return $new;
    }

    /**
     * @return string
     */
    public function getABS_CodeAbsence()
    {
        return $this->ABS_CodeAbsence;
    }

    /**
     * @param string $ABS_CodeAbsence
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiples
     */
    public function withABS_CodeAbsence($ABS_CodeAbsence)
    {
        $new = clone $this;
        $new->ABS_CodeAbsence = $ABS_CodeAbsence;

        return $new;
    }

    /**
     * @return string
     */
    public function getABS_Commentaire1()
    {
        return $this->ABS_Commentaire1;
    }

    /**
     * @param string $ABS_Commentaire1
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiples
     */
    public function withABS_Commentaire1($ABS_Commentaire1)
    {
        $new = clone $this;
        $new->ABS_Commentaire1 = $ABS_Commentaire1;

        return $new;
    }

    /**
     * @return string
     */
    public function getABS_Commentaire2()
    {
        return $this->ABS_Commentaire2;
    }

    /**
     * @param string $ABS_Commentaire2
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiples
     */
    public function withABS_Commentaire2($ABS_Commentaire2)
    {
        $new = clone $this;
        $new->ABS_Commentaire2 = $ABS_Commentaire2;

        return $new;
    }

    /**
     * @return string
     */
    public function getABS_Commentaire3()
    {
        return $this->ABS_Commentaire3;
    }

    /**
     * @param string $ABS_Commentaire3
     * @return SWSUtilisateurSuperviseurAjouterAbsencesMultiples
     */
    public function withABS_Commentaire3($ABS_Commentaire3)
    {
        $new = clone $this;
        $new->ABS_Commentaire3 = $ABS_Commentaire3;

        return $new;
    }
}

