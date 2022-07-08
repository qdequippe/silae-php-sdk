<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSuperviseurRejeterDemandesAbsence implements RequestInterface
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
    private $ID_PAIABSENCEs;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_SUPERVISEUR
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfInt $ID_PAIABSENCEs
     */
    public function __construct($Token, $ID_DOMAINE, $ID_SUPERVISEUR, $ID_PAIABSENCEs)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_SUPERVISEUR = $ID_SUPERVISEUR;
        $this->ID_PAIABSENCEs = $ID_PAIABSENCEs;
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
     * @return SWSUtilisateurSuperviseurRejeterDemandesAbsence
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
     * @return SWSUtilisateurSuperviseurRejeterDemandesAbsence
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
     * @return SWSUtilisateurSuperviseurRejeterDemandesAbsence
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
    public function getID_PAIABSENCEs()
    {
        return $this->ID_PAIABSENCEs;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfInt $ID_PAIABSENCEs
     * @return SWSUtilisateurSuperviseurRejeterDemandesAbsence
     */
    public function withID_PAIABSENCEs($ID_PAIABSENCEs)
    {
        $new = clone $this;
        $new->ID_PAIABSENCEs = $ID_PAIABSENCEs;

        return $new;
    }
}

