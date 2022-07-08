<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSLectureInformationsDossier implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var int
     */
    private $ID_CLIENT;

    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_CLIENT
     * @var string $NumeroDossier
     */
    public function __construct($Token, $ID_CLIENT, $NumeroDossier)
    {
        $this->Token = $Token;
        $this->ID_CLIENT = $ID_CLIENT;
        $this->NumeroDossier = $NumeroDossier;
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
     * @return SWSLectureInformationsDossier
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
    public function getID_CLIENT()
    {
        return $this->ID_CLIENT;
    }

    /**
     * @param int $ID_CLIENT
     * @return SWSLectureInformationsDossier
     */
    public function withID_CLIENT($ID_CLIENT)
    {
        $new = clone $this;
        $new->ID_CLIENT = $ID_CLIENT;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return SWSLectureInformationsDossier
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }
}

