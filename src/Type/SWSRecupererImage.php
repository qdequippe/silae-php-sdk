<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSRecupererImage implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

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
     * @var int $NatureImage
     * @var int $ID_IMAGE
     */
    public function __construct($Token, $NatureImage, $ID_IMAGE)
    {
        $this->Token = $Token;
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
     * @return SWSRecupererImage
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
    public function getNatureImage()
    {
        return $this->NatureImage;
    }

    /**
     * @param int $NatureImage
     * @return SWSRecupererImage
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
     * @return SWSRecupererImage
     */
    public function withID_IMAGE($ID_IMAGE)
    {
        $new = clone $this;
        $new->ID_IMAGE = $ID_IMAGE;

        return $new;
    }
}

