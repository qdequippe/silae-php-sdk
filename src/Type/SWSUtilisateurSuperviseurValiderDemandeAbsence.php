<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSuperviseurValiderDemandeAbsence implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeAbsence
     */
    private $Absence;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_SUPERVISEUR
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeAbsence $Absence
     */
    public function __construct($Token, $ID_DOMAINE, $ID_SUPERVISEUR, $Absence)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_SUPERVISEUR = $ID_SUPERVISEUR;
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
     * @return SWSUtilisateurSuperviseurValiderDemandeAbsence
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
     * @return SWSUtilisateurSuperviseurValiderDemandeAbsence
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
     * @return SWSUtilisateurSuperviseurValiderDemandeAbsence
     */
    public function withID_SUPERVISEUR($ID_SUPERVISEUR)
    {
        $new = clone $this;
        $new->ID_SUPERVISEUR = $ID_SUPERVISEUR;

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
     * @return SWSUtilisateurSuperviseurValiderDemandeAbsence
     */
    public function withAbsence($Absence)
    {
        $new = clone $this;
        $new->Absence = $Absence;

        return $new;
    }
}

