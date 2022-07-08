<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSalarieAcquisitionSA implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSArgumentSalarieSA
     */
    private $ArgumentSA;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_PAISALARIE
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSArgumentSalarieSA $ArgumentSA
     */
    public function __construct($Token, $ID_DOMAINE, $ID_PAISALARIE, $ArgumentSA)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_PAISALARIE = $ID_PAISALARIE;
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
     * @return SWSUtilisateurSalarieAcquisitionSA
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
     * @return SWSUtilisateurSalarieAcquisitionSA
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
     * @return SWSUtilisateurSalarieAcquisitionSA
     */
    public function withID_PAISALARIE($ID_PAISALARIE)
    {
        $new = clone $this;
        $new->ID_PAISALARIE = $ID_PAISALARIE;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSArgumentSalarieSA
     */
    public function getArgumentSA()
    {
        return $this->ArgumentSA;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSArgumentSalarieSA $ArgumentSA
     * @return SWSUtilisateurSalarieAcquisitionSA
     */
    public function withArgumentSA($ArgumentSA)
    {
        $new = clone $this;
        $new->ArgumentSA = $ArgumentSA;

        return $new;
    }
}

