<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSAppliquerDroitEditeur implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $Login;

    /**
     * @var string
     */
    private $Password;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $Login
     * @var string $Password
     */
    public function __construct($Token, $Login, $Password)
    {
        $this->Token = $Token;
        $this->Login = $Login;
        $this->Password = $Password;
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
     * @return SWSAppliquerDroitEditeur
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
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * @param string $Login
     * @return SWSAppliquerDroitEditeur
     */
    public function withLogin($Login)
    {
        $new = clone $this;
        $new->Login = $Login;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return SWSAppliquerDroitEditeur
     */
    public function withPassword($Password)
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }
}

