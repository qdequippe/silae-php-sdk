<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSuperviseurAcquisitionSA implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSArgumentSuperviseurSA
     */
    private $ArgumentSA;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_SUPERVISEUR
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSArgumentSuperviseurSA $ArgumentSA
     */
    public function __construct($Token, $ID_DOMAINE, $ID_SUPERVISEUR, $ArgumentSA)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_SUPERVISEUR = $ID_SUPERVISEUR;
        $this->ArgumentSA = $ArgumentSA;
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
     * @return SWSUtilisateurSuperviseurAcquisitionSA
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
     * @return SWSUtilisateurSuperviseurAcquisitionSA
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
     * @return SWSUtilisateurSuperviseurAcquisitionSA
     */
    public function withID_SUPERVISEUR($ID_SUPERVISEUR)
    {
        $new = clone $this;
        $new->ID_SUPERVISEUR = $ID_SUPERVISEUR;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSArgumentSuperviseurSA
     */
    public function getArgumentSA()
    {
        return $this->ArgumentSA;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSArgumentSuperviseurSA $ArgumentSA
     * @return SWSUtilisateurSuperviseurAcquisitionSA
     */
    public function withArgumentSA($ArgumentSA)
    {
        $new = clone $this;
        $new->ArgumentSA = $ArgumentSA;

        return $new;
    }
}

