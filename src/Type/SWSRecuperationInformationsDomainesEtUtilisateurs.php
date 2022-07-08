<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSRecuperationInformationsDomainesEtUtilisateurs implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $Filtre;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $Filtre
     */
    public function __construct($Token, $Filtre)
    {
        $this->Token = $Token;
        $this->Filtre = $Filtre;
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
     * @return SWSRecuperationInformationsDomainesEtUtilisateurs
     */
    public function withToken($Token)
    {
        $new = clone $this;
        $new->Token = $Token;

        return $new;
    }

    /**
     * @return string
     */
    public function getFiltre()
    {
        return $this->Filtre;
    }

    /**
     * @param string $Filtre
     * @return SWSRecuperationInformationsDomainesEtUtilisateurs
     */
    public function withFiltre($Filtre)
    {
        $new = clone $this;
        $new->Filtre = $Filtre;

        return $new;
    }
}

