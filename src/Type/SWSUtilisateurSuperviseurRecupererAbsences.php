<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSuperviseurRecupererAbsences implements RequestInterface
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
     * @var int $ID_SUPERVISEUR
     * @var \DateTimeInterface $PeriodeDebut
     * @var \DateTimeInterface $PeriodeFin
     */
    public function __construct($Token, $ID_DOMAINE, $ID_SUPERVISEUR, $PeriodeDebut, $PeriodeFin)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_SUPERVISEUR = $ID_SUPERVISEUR;
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
     * @return SWSUtilisateurSuperviseurRecupererAbsences
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
     * @return SWSUtilisateurSuperviseurRecupererAbsences
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
     * @return SWSUtilisateurSuperviseurRecupererAbsences
     */
    public function withID_SUPERVISEUR($ID_SUPERVISEUR)
    {
        $new = clone $this;
        $new->ID_SUPERVISEUR = $ID_SUPERVISEUR;

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
     * @return SWSUtilisateurSuperviseurRecupererAbsences
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
     * @return SWSUtilisateurSuperviseurRecupererAbsences
     */
    public function withPeriodeFin($PeriodeFin)
    {
        $new = clone $this;
        $new->PeriodeFin = $PeriodeFin;

        return $new;
    }
}

