<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLoginResult
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $AdresseFermeDistante;

    /**
     * @var string
     */
    private $RepartiteurAdresse;

    /**
     * @var int
     */
    private $NatureUtilisateur;

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param string $Token
     * @return SWSLoginResult
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
    public function getAdresseFermeDistante()
    {
        return $this->AdresseFermeDistante;
    }

    /**
     * @param string $AdresseFermeDistante
     * @return SWSLoginResult
     */
    public function withAdresseFermeDistante($AdresseFermeDistante)
    {
        $new = clone $this;
        $new->AdresseFermeDistante = $AdresseFermeDistante;

        return $new;
    }

    /**
     * @return string
     */
    public function getRepartiteurAdresse()
    {
        return $this->RepartiteurAdresse;
    }

    /**
     * @param string $RepartiteurAdresse
     * @return SWSLoginResult
     */
    public function withRepartiteurAdresse($RepartiteurAdresse)
    {
        $new = clone $this;
        $new->RepartiteurAdresse = $RepartiteurAdresse;

        return $new;
    }

    /**
     * @return int
     */
    public function getNatureUtilisateur()
    {
        return $this->NatureUtilisateur;
    }

    /**
     * @param int $NatureUtilisateur
     * @return SWSLoginResult
     */
    public function withNatureUtilisateur($NatureUtilisateur)
    {
        $new = clone $this;
        $new->NatureUtilisateur = $NatureUtilisateur;

        return $new;
    }
}

