<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurContactConfirmerHMens implements RequestInterface
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
    private $ID_CLIENT;

    /**
     * @var int
     */
    private $ID_DROIT;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSArgumentConfirmerHMens
     */
    private $ArgumentConfirmerHMens;

    /**
     * Constructor
     *
     * @var string $Token
     * @var int $ID_DOMAINE
     * @var int $ID_CLIENT
     * @var int $ID_DROIT
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSArgumentConfirmerHMens $ArgumentConfirmerHMens
     */
    public function __construct($Token, $ID_DOMAINE, $ID_CLIENT, $ID_DROIT, $ArgumentConfirmerHMens)
    {
        $this->Token = $Token;
        $this->ID_DOMAINE = $ID_DOMAINE;
        $this->ID_CLIENT = $ID_CLIENT;
        $this->ID_DROIT = $ID_DROIT;
        $this->ArgumentConfirmerHMens = $ArgumentConfirmerHMens;
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
     * @return SWSUtilisateurContactConfirmerHMens
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
     * @return SWSUtilisateurContactConfirmerHMens
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
    public function getID_CLIENT()
    {
        return $this->ID_CLIENT;
    }

    /**
     * @param int $ID_CLIENT
     * @return SWSUtilisateurContactConfirmerHMens
     */
    public function withID_CLIENT($ID_CLIENT)
    {
        $new = clone $this;
        $new->ID_CLIENT = $ID_CLIENT;

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
     * @return SWSUtilisateurContactConfirmerHMens
     */
    public function withID_DROIT($ID_DROIT)
    {
        $new = clone $this;
        $new->ID_DROIT = $ID_DROIT;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSArgumentConfirmerHMens
     */
    public function getArgumentConfirmerHMens()
    {
        return $this->ArgumentConfirmerHMens;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSArgumentConfirmerHMens $ArgumentConfirmerHMens
     * @return SWSUtilisateurContactConfirmerHMens
     */
    public function withArgumentConfirmerHMens($ArgumentConfirmerHMens)
    {
        $new = clone $this;
        $new->ArgumentConfirmerHMens = $ArgumentConfirmerHMens;

        return $new;
    }
}

