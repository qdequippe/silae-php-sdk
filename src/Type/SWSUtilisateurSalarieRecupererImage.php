<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurSalarieRecupererImage implements RequestInterface
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
    private $NatureImage;

    /**
     * @var int
     */
    private $ID_IMAGE;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_PAISALARIE
     * @var int $NatureImage
     * @var int $ID_IMAGE
     */
    public function __construct($Token, $ID_DOMAINE, $ID_PAISALARIE, $NatureImage, $ID_IMAGE)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_PAISALARIE = $ID_PAISALARIE;
        $this->NatureImage = $NatureImage;
        $this->ID_IMAGE = $ID_IMAGE;
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
     * @return SWSUtilisateurSalarieRecupererImage
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
     * @return SWSUtilisateurSalarieRecupererImage
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
     * @return SWSUtilisateurSalarieRecupererImage
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
    public function getNatureImage()
    {
        return $this->NatureImage;
    }

    /**
     * @param int $NatureImage
     * @return SWSUtilisateurSalarieRecupererImage
     */
    public function withNatureImage($NatureImage)
    {
        $new = clone $this;
        $new->NatureImage = $NatureImage;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_IMAGE()
    {
        return $this->ID_IMAGE;
    }

    /**
     * @param int $ID_IMAGE
     * @return SWSUtilisateurSalarieRecupererImage
     */
    public function withID_IMAGE($ID_IMAGE)
    {
        $new = clone $this;
        $new->ID_IMAGE = $ID_IMAGE;

        return $new;
    }
}

