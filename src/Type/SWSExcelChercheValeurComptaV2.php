<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSExcelChercheValeurComptaV2 implements RequestInterface
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
    private $Comptes;

    /**
     * @var string
     */
    private $strDateDebut;

    /**
     * @var string
     */
    private $strDateFin;

    /**
     * @var string
     */
    private $Rubrique;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $Dossier
     * @var string $Comptes
     * @var string $strDateDebut
     * @var string $strDateFin
     * @var string $Rubrique
     */
    public function __construct($Token, $Dossier, $Comptes, $strDateDebut, $strDateFin, $Rubrique)
    {
        $this->Token = $Token;
        $this->Dossier = $Dossier;
        $this->Comptes = $Comptes;
        $this->strDateDebut = $strDateDebut;
        $this->strDateFin = $strDateFin;
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
     * @return SWSExcelChercheValeurComptaV2
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
     * @return SWSExcelChercheValeurComptaV2
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
    public function getComptes()
    {
        return $this->Comptes;
    }

    /**
     * @param string $Comptes
     * @return SWSExcelChercheValeurComptaV2
     */
    public function withComptes($Comptes)
    {
        $new = clone $this;
        $new->Comptes = $Comptes;

        return $new;
    }

    /**
     * @return string
     */
    public function getStrDateDebut()
    {
        return $this->strDateDebut;
    }

    /**
     * @param string $strDateDebut
     * @return SWSExcelChercheValeurComptaV2
     */
    public function withStrDateDebut($strDateDebut)
    {
        $new = clone $this;
        $new->strDateDebut = $strDateDebut;

        return $new;
    }

    /**
     * @return string
     */
    public function getStrDateFin()
    {
        return $this->strDateFin;
    }

    /**
     * @param string $strDateFin
     * @return SWSExcelChercheValeurComptaV2
     */
    public function withStrDateFin($strDateFin)
    {
        $new = clone $this;
        $new->strDateFin = $strDateFin;

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
     * @return SWSExcelChercheValeurComptaV2
     */
    public function withRubrique($Rubrique)
    {
        $new = clone $this;
        $new->Rubrique = $Rubrique;

        return $new;
    }
}

