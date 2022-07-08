<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSalarieRecupererAbsencesGroupees implements RequestInterface
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
    private $ID_PAISALARIE;

    /**
     * @var string
     */
    private $TypeGroupe;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeDebut;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeFin;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_PAISALARIE
     * @var string $TypeGroupe
     * @var \DateTimeInterface $PeriodeDebut
     * @var \DateTimeInterface $PeriodeFin
     */
    public function __construct($Token, $ID_DOMAINE, $ID_PAISALARIE, $TypeGroupe, $PeriodeDebut, $PeriodeFin)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_PAISALARIE = $ID_PAISALARIE;
        $this->TypeGroupe = $TypeGroupe;
        $this->PeriodeDebut = $PeriodeDebut;
        $this->PeriodeFin = $PeriodeFin;
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
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupees
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
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupees
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
    public function getID_PAISALARIE()
    {
        return $this->ID_PAISALARIE;
    }

    /**
     * @param int $ID_PAISALARIE
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupees
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

        return $new;
    }

    /**
     * @return string
     */
    public function getTypeGroupe()
    {
        return $this->TypeGroupe;
    }

    /**
     * @param string $TypeGroupe
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupees
     */
    public function withTypeGroupe($TypeGroupe)
    {
        $new = clone $this;
        $new->TypeGroupe = $TypeGroupe;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeDebut()
    {
        return $this->PeriodeDebut;
    }

    /**
     * @param \DateTimeInterface $PeriodeDebut
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupees
     */
    public function withPeriodeDebut($PeriodeDebut)
    {
        $new = clone $this;
        $new->PeriodeDebut = $PeriodeDebut;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeFin()
    {
        return $this->PeriodeFin;
    }

    /**
     * @param \DateTimeInterface $PeriodeFin
     * @return SWSUtilisateurSalarieRecupererAbsencesGroupees
     */
    public function withPeriodeFin($PeriodeFin)
    {
        $new = clone $this;
        $new->PeriodeFin = $PeriodeFin;

        return $new;
    }
}

