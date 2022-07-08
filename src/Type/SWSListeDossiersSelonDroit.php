<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSListeDossiersSelonDroit implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var int
     */
    private $ID_DROIT;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DROIT
     */
    public function __construct($Token, $ID_DROIT)
    {
        $this->Token = $Token;
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
     * @return SWSListeDossiersSelonDroit
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
    public function getID_DROIT()
    {
        return $this->ID_DROIT;
    }

    /**
     * @param int $ID_DROIT
     * @return SWSListeDossiersSelonDroit
     */
    public function withID_DROIT($ID_DROIT)
    {
        $new = clone $this;
        $new->ID_DROIT = $ID_DROIT;

        return $new;
    }
}

