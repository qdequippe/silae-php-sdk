<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSalarieDocumentGED implements RequestInterface
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
    private $ID_DOCUMENT;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_PAISALARIE
     * @var int $ID_DOCUMENT
     */
    public function __construct($Token, $ID_DOMAINE, $ID_PAISALARIE, $ID_DOCUMENT)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_PAISALARIE = $ID_PAISALARIE;
        $this->ID_DOCUMENT = $ID_DOCUMENT;
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
     * @return SWSUtilisateurSalarieDocumentGED
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
     * @return SWSUtilisateurSalarieDocumentGED
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
     * @return SWSUtilisateurSalarieDocumentGED
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
    public function getID_DOCUMENT()
    {
        return $this->ID_DOCUMENT;
    }

    /**
     * @param int $ID_DOCUMENT
     * @return SWSUtilisateurSalarieDocumentGED
     */
    public function withID_DOCUMENT($ID_DOCUMENT)
    {
        $new = clone $this;
        $new->ID_DOCUMENT = $ID_DOCUMENT;

        return $new;
    }
}

