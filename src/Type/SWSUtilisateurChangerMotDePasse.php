<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSUtilisateurChangerMotDePasse implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $AncienMotDePasse;

    /**
     * @var string
     */
    private $NouveauMotDePasse;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $AncienMotDePasse
     * @var string $NouveauMotDePasse
     */
    public function __construct($Token, $AncienMotDePasse, $NouveauMotDePasse)
    {
        $this->Token = $Token;
        $this->AncienMotDePasse = $AncienMotDePasse;
        $this->NouveauMotDePasse = $NouveauMotDePasse;
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
     * @return SWSUtilisateurChangerMotDePasse
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
    public function getAncienMotDePasse()
    {
        return $this->AncienMotDePasse;
    }

    /**
     * @param string $AncienMotDePasse
     * @return SWSUtilisateurChangerMotDePasse
     */
    public function withAncienMotDePasse($AncienMotDePasse)
    {
        $new = clone $this;
        $new->AncienMotDePasse = $AncienMotDePasse;

        return $new;
    }

    /**
     * @return string
     */
    public function getNouveauMotDePasse()
    {
        return $this->NouveauMotDePasse;
    }

    /**
     * @param string $NouveauMotDePasse
     * @return SWSUtilisateurChangerMotDePasse
     */
    public function withNouveauMotDePasse($NouveauMotDePasse)
    {
        $new = clone $this;
        $new->NouveauMotDePasse = $NouveauMotDePasse;

        return $new;
    }
}

