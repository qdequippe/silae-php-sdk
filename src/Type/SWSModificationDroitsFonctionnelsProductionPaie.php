<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationDroitsFonctionnelsProductionPaie implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $LoginUtilisateur;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSOngletProduction
     */
    private $OngletProductionPaie;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $LoginUtilisateur
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSOngletProduction $OngletProductionPaie
     */
    public function __construct($Token, $LoginUtilisateur, $OngletProductionPaie)
    {
        $this->Token = $Token;
        $this->LoginUtilisateur = $LoginUtilisateur;
        $this->OngletProductionPaie = $OngletProductionPaie;
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
     * @return SWSModificationDroitsFonctionnelsProductionPaie
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
    public function getLoginUtilisateur()
    {
        return $this->LoginUtilisateur;
    }

    /**
     * @param string $LoginUtilisateur
     * @return SWSModificationDroitsFonctionnelsProductionPaie
     */
    public function withLoginUtilisateur($LoginUtilisateur)
    {
        $new = clone $this;
        $new->LoginUtilisateur = $LoginUtilisateur;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CSWSOngletProduction
     */
    public function getOngletProductionPaie()
    {
        return $this->OngletProductionPaie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CSWSOngletProduction $OngletProductionPaie
     * @return SWSModificationDroitsFonctionnelsProductionPaie
     */
    public function withOngletProductionPaie($OngletProductionPaie)
    {
        $new = clone $this;
        $new->OngletProductionPaie = $OngletProductionPaie;

        return $new;
    }
}

