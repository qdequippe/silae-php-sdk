<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSExcelChercheValeurPaieLigneBulletinV2 implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $Dossier;

    /**
     * @var string
     */
    private $Etablissement;

    /**
     * @var string
     */
    private $Affectation;

    /**
     * @var string
     */
    private $Matricule;

    /**
     * @var string
     */
    private $strPeriodeDebut;

    /**
     * @var string
     */
    private $strPeriodeFin;

    /**
     * @var string
     */
    private $CodeLibelle;

    /**
     * @var string
     */
    private $MarqueInterne;

    /**
     * @var string
     */
    private $Rubrique;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $Dossier
     * @var string $Etablissement
     * @var string $Affectation
     * @var string $Matricule
     * @var string $strPeriodeDebut
     * @var string $strPeriodeFin
     * @var string $CodeLibelle
     * @var string $MarqueInterne
     * @var string $Rubrique
     */
    public function __construct($Token, $Dossier, $Etablissement, $Affectation, $Matricule, $strPeriodeDebut, $strPeriodeFin, $CodeLibelle, $MarqueInterne, $Rubrique)
    {
        $this->Token = $Token;
        $this->Dossier = $Dossier;
        $this->Etablissement = $Etablissement;
        $this->Affectation = $Affectation;
        $this->Matricule = $Matricule;
        $this->strPeriodeDebut = $strPeriodeDebut;
        $this->strPeriodeFin = $strPeriodeFin;
        $this->CodeLibelle = $CodeLibelle;
        $this->MarqueInterne = $MarqueInterne;
        $this->Rubrique = $Rubrique;
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
     * @return SWSExcelChercheValeurPaieLigneBulletinV2
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return string
     */
    public function getDossier()
    {
        return $this->Dossier;
    }

    /**
     * @param string $Dossier
     * @return SWSExcelChercheValeurPaieLigneBulletinV2
     */
    public function withDossier($Dossier)
    {
        $new = clone $this;
        $new->Dossier = $Dossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getEtablissement()
    {
        return $this->Etablissement;
    }

    /**
     * @param string $Etablissement
     * @return SWSExcelChercheValeurPaieLigneBulletinV2
     */
    public function withEtablissement($Etablissement)
    {
        $new = clone $this;
        $new->Etablissement = $Etablissement;

        return $new;
    }

    /**
     * @return string
     */
    public function getAffectation()
    {
        return $this->Affectation;
    }

    /**
     * @param string $Affectation
     * @return SWSExcelChercheValeurPaieLigneBulletinV2
     */
    public function withAffectation($Affectation)
    {
        $new = clone $this;
        $new->Affectation = $Affectation;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatricule()
    {
        return $this->Matricule;
    }

    /**
     * @param string $Matricule
     * @return SWSExcelChercheValeurPaieLigneBulletinV2
     */
    public function withMatricule($Matricule)
    {
        $new = clone $this;
        $new->Matricule = $Matricule;

        return $new;
    }

    /**
     * @return string
     */
    public function getStrPeriodeDebut()
    {
        return $this->strPeriodeDebut;
    }

    /**
     * @param string $strPeriodeDebut
     * @return SWSExcelChercheValeurPaieLigneBulletinV2
     */
    public function withStrPeriodeDebut($strPeriodeDebut)
    {
        $new = clone $this;
        $new->strPeriodeDebut = $strPeriodeDebut;

        return $new;
    }

    /**
     * @return string
     */
    public function getStrPeriodeFin()
    {
        return $this->strPeriodeFin;
    }

    /**
     * @param string $strPeriodeFin
     * @return SWSExcelChercheValeurPaieLigneBulletinV2
     */
    public function withStrPeriodeFin($strPeriodeFin)
    {
        $new = clone $this;
        $new->strPeriodeFin = $strPeriodeFin;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeLibelle()
    {
        return $this->CodeLibelle;
    }

    /**
     * @param string $CodeLibelle
     * @return SWSExcelChercheValeurPaieLigneBulletinV2
     */
    public function withCodeLibelle($CodeLibelle)
    {
        $new = clone $this;
        $new->CodeLibelle = $CodeLibelle;

        return $new;
    }

    /**
     * @return string
     */
    public function getMarqueInterne()
    {
        return $this->MarqueInterne;
    }

    /**
     * @param string $MarqueInterne
     * @return SWSExcelChercheValeurPaieLigneBulletinV2
     */
    public function withMarqueInterne($MarqueInterne)
    {
        $new = clone $this;
        $new->MarqueInterne = $MarqueInterne;

        return $new;
    }

    /**
     * @return string
     */
    public function getRubrique()
    {
        return $this->Rubrique;
    }

    /**
     * @param string $Rubrique
     * @return SWSExcelChercheValeurPaieLigneBulletinV2
     */
    public function withRubrique($Rubrique)
    {
        $new = clone $this;
        $new->Rubrique = $Rubrique;

        return $new;
    }
}

