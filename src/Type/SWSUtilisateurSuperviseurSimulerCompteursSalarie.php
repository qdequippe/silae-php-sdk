<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSuperviseurSimulerCompteursSalarie implements RequestInterface
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
     * @var int
     */
    private $ID_PAISALARIE;

    /**
     * @var \DateTimeInterface
     */
    private $PeriodeSimulation;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_SUPERVISEUR
     * @var int $ID_PAISALARIE
     * @var \DateTimeInterface $PeriodeSimulation
     */
    public function __construct($Token, $ID_DOMAINE, $ID_SUPERVISEUR, $ID_PAISALARIE, $PeriodeSimulation)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_SUPERVISEUR = $ID_SUPERVISEUR;
        $this->ID_PAISALARIE = $ID_PAISALARIE;
        $this->PeriodeSimulation = $PeriodeSimulation;
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
     * @return SWSUtilisateurSuperviseurSimulerCompteursSalarie
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
     * @return SWSUtilisateurSuperviseurSimulerCompteursSalarie
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
     * @return SWSUtilisateurSuperviseurSimulerCompteursSalarie
     */
    public function withID_SUPERVISEUR($ID_SUPERVISEUR)
    {
        $new = clone $this;
        $new->ID_SUPERVISEUR = $ID_SUPERVISEUR;

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
     * @return SWSUtilisateurSuperviseurSimulerCompteursSalarie
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriodeSimulation()
    {
        return $this->PeriodeSimulation;
    }

    /**
     * @param \DateTimeInterface $PeriodeSimulation
     * @return SWSUtilisateurSuperviseurSimulerCompteursSalarie
     */
    public function withPeriodeSimulation($PeriodeSimulation)
    {
        $new = clone $this;
        $new->PeriodeSimulation = $PeriodeSimulation;

        return $new;
    }
}

