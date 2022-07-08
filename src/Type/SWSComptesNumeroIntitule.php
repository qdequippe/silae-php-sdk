<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSComptesNumeroIntitule implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var int
     */
    private $ID_CTAEXERCICE;

    /**
     * @var int
     */
    private $ID_DROIT;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_CTAEXERCICE
     * @var int $ID_DROIT
     */
    public function __construct($Token, $ID_CTAEXERCICE, $ID_DROIT)
    {
        $this->Token = $Token;
        $this->ID_CTAEXERCICE = $ID_CTAEXERCICE;
        $this->ID_DROIT = $ID_DROIT;
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
     * @return SWSComptesNumeroIntitule
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
    public function getID_CTAEXERCICE()
    {
        return $this->ID_CTAEXERCICE;
    }

    /**
     * @param int $ID_CTAEXERCICE
     * @return SWSComptesNumeroIntitule
     */
    public function withID_CTAEXERCICE($ID_CTAEXERCICE)
    {
        $new = clone $this;
        $new->ID_CTAEXERCICE = $ID_CTAEXERCICE;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_DROIT()
    {
        return $this->ID_DROIT;
    }

    /**
     * @param int $ID_DROIT
     * @return SWSComptesNumeroIntitule
     */
    public function withID_DROIT($ID_DROIT)
    {
        $new = clone $this;
        $new->ID_DROIT = $ID_DROIT;

        return $new;
    }
}

