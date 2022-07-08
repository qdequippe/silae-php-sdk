<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurContactAjouterAbsence implements RequestInterface
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
    private $ID_CLIENT;

    /**
     * @var int
     */
    private $ID_DROIT;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeAbsence
     */
    private $Absence;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_CLIENT
     * @var int $ID_DROIT
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeAbsence $Absence
     */
    public function __construct($Token, $ID_DOMAINE, $ID_CLIENT, $ID_DROIT, $Absence)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_CLIENT = $ID_CLIENT;
        $this->ID_DROIT = $ID_DROIT;
        $this->Absence = $Absence;
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
     * @return SWSUtilisateurContactAjouterAbsence
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
     * @return SWSUtilisateurContactAjouterAbsence
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
    public function getID_CLIENT()
    {
        return $this->ID_CLIENT;
    }

    /**
     * @param int $ID_CLIENT
     * @return SWSUtilisateurContactAjouterAbsence
     */
    public function withID_CLIENT($ID_CLIENT)
    {
        $new = clone $this;
        $new->ID_CLIENT = $ID_CLIENT;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_DROIT()
    {
        return $this->ID_DROIT;
    }

    /**
     * @param int $ID_DROIT
     * @return SWSUtilisateurContactAjouterAbsence
     */
    public function withID_DROIT($ID_DROIT)
    {
        $new = clone $this;
        $new->ID_DROIT = $ID_DROIT;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeAbsence
     */
    public function getAbsence()
    {
        return $this->Absence;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeAbsence $Absence
     * @return SWSUtilisateurContactAjouterAbsence
     */
    public function withAbsence($Absence)
    {
        $new = clone $this;
        $new->Absence = $Absence;

        return $new;
    }
}

