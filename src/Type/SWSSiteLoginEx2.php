<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSSiteLoginEx2 implements RequestInterface
{
    /**
     * @var string
     */
    private $SWSLogin;

    /**
     * @var string
     */
    private $SWSPassword;

    /**
     * @var string
     */
    private $USRLogin;

    /**
     * @var string
     */
    private $USRPassword;

    /**
     * Constructor
     *
     * @var string $SWSLogin
     * @var string $SWSPassword
     * @var string $USRLogin
     * @var string $USRPassword
     */
    public function __construct($SWSLogin, $SWSPassword, $USRLogin, $USRPassword)
    {
        $this->SWSLogin = $SWSLogin;
        $this->SWSPassword = $SWSPassword;
        $this->USRLogin = $USRLogin;
        $this->USRPassword = $USRPassword;
    }

    /**
     * @return string
     */
    public function getSWSLogin()
    {
        return $this->SWSLogin;
    }

    /**
     * @param string $SWSLogin
     * @return SWSSiteLoginEx2
     */
    public function withSWSLogin($SWSLogin)
    {
        $new = clone $this;
        $new->SWSLogin = $SWSLogin;

        return $new;
    }

    /**
     * @return string
     */
    public function getSWSPassword()
    {
        return $this->SWSPassword;
    }

    /**
     * @param string $SWSPassword
     * @return SWSSiteLoginEx2
     */
    public function withSWSPassword($SWSPassword)
    {
        $new = clone $this;
        $new->SWSPassword = $SWSPassword;

        return $new;
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
     * @return SWSSiteLoginEx2
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
     * @return SWSSiteLoginEx2
     */
    public function withUSRPassword($USRPassword)
    {
        $new = clone $this;
        $new->USRPassword = $USRPassword;

        return $new;
    }
}

