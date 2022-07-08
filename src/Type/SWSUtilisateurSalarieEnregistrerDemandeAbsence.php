<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSalarieEnregistrerDemandeAbsence implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeAbsence
     */
    private $Absence;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_PAISALARIE
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieDemandeAbsence $Absence
     */
    public function __construct($Token, $ID_DOMAINE, $ID_PAISALARIE, $Absence)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_PAISALARIE = $ID_PAISALARIE;
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
     * @return SWSUtilisateurSalarieEnregistrerDemandeAbsence
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
     * @return SWSUtilisateurSalarieEnregistrerDemandeAbsence
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
     * @return SWSUtilisateurSalarieEnregistrerDemandeAbsence
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

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
     * @return SWSUtilisateurSalarieEnregistrerDemandeAbsence
     */
    public function withAbsence($Absence)
    {
        $new = clone $this;
        $new->Absence = $Absence;

        return $new;
    }
}

