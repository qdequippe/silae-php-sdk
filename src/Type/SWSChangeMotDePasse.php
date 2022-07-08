<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSChangeMotDePasse implements RequestInterface
{
    /**
     * @var string
     */
    private $USRLogin;

    /**
     * @var string
     */
    private $USRPassword;

    /**
     * @var string
     */
    private $NEWPassword;

    /**
     * Constructor
     *
     * @var string $USRLogin
     * @var string $USRPassword
     * @var string $NEWPassword
     */
    public function __construct($USRLogin, $USRPassword, $NEWPassword)
    {
        $this->USRLogin = $USRLogin;
        $this->USRPassword = $USRPassword;
        $this->NEWPassword = $NEWPassword;
    }

    /**
     * @return string
     */
    public function getUSRLogin()
    {
        return $this->USRLogin;
    }

    /**
     * @param string $USRLogin
     * @return SWSChangeMotDePasse
     */
    public function withUSRLogin($USRLogin)
    {
        $new = clone $this;
        $new->USRLogin = $USRLogin;

        return $new;
    }

    /**
     * @return string
     */
    public function getUSRPassword()
    {
        return $this->USRPassword;
    }

    /**
     * @param string $USRPassword
     * @return SWSChangeMotDePasse
     */
    public function withUSRPassword($USRPassword)
    {
        $new = clone $this;
        $new->USRPassword = $USRPassword;

        return $new;
    }

    /**
     * @return string
     */
    public function getNEWPassword()
    {
        return $this->NEWPassword;
    }

    /**
     * @param string $NEWPassword
     * @return SWSChangeMotDePasse
     */
    public function withNEWPassword($NEWPassword)
    {
        $new = clone $this;
        $new->NEWPassword = $NEWPassword;

        return $new;
    }
}

