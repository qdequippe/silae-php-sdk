<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSalarieRecupererImageDossier implements RequestInterface
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
    private $Code;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_PAISALARIE
     * @var string $Code
     */
    public function __construct($Token, $ID_DOMAINE, $ID_PAISALARIE, $Code)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_PAISALARIE = $ID_PAISALARIE;
        $this->Code = $Code;
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
     * @return SWSUtilisateurSalarieRecupererImageDossier
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
     * @return SWSUtilisateurSalarieRecupererImageDossier
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
     * @return SWSUtilisateurSalarieRecupererImageDossier
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
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return SWSUtilisateurSalarieRecupererImageDossier
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }
}

