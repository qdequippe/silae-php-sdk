<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSalarieObtenirMailAnnulationAbsence implements RequestInterface
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
     * @var int
     */
    private $ID_PAIABSENCE;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_PAISALARIE
     * @var int $ID_PAIABSENCE
     */
    public function __construct($Token, $ID_DOMAINE, $ID_PAISALARIE, $ID_PAIABSENCE)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_PAISALARIE = $ID_PAISALARIE;
        $this->ID_PAIABSENCE = $ID_PAIABSENCE;
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
     * @return SWSUtilisateurSalarieObtenirMailAnnulationAbsence
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
     * @return SWSUtilisateurSalarieObtenirMailAnnulationAbsence
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
     * @return SWSUtilisateurSalarieObtenirMailAnnulationAbsence
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_PAIABSENCE()
    {
        return $this->ID_PAIABSENCE;
    }

    /**
     * @param int $ID_PAIABSENCE
     * @return SWSUtilisateurSalarieObtenirMailAnnulationAbsence
     */
    public function withID_PAIABSENCE($ID_PAIABSENCE)
    {
        $new = clone $this;
        $new->ID_PAIABSENCE = $ID_PAIABSENCE;

        return $new;
    }
}

