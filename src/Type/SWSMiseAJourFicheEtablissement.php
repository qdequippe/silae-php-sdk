<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSMiseAJourFicheEtablissement implements RequestInterface
{
    /**
     * @var string
     */
    private $Token;

    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var string
     */
    private $NomInterne;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEtablissementInfoSup
     */
    private $EtablissementInfoSup;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $NomInterne
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSEtablissementInfoSup $EtablissementInfoSup
     */
    public function __construct($Token, $NumeroDossier, $NomInterne, $EtablissementInfoSup)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->NomInterne = $NomInterne;
        $this->EtablissementInfoSup = $EtablissementInfoSup;
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
     * @return SWSMiseAJourFicheEtablissement
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
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return SWSMiseAJourFicheEtablissement
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return string
     */
    public function getNomInterne()
    {
        return $this->NomInterne;
    }

    /**
     * @param string $NomInterne
     * @return SWSMiseAJourFicheEtablissement
     */
    public function withNomInterne($NomInterne)
    {
        $new = clone $this;
        $new->NomInterne = $NomInterne;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSEtablissementInfoSup
     */
    public function getEtablissementInfoSup()
    {
        return $this->EtablissementInfoSup;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSEtablissementInfoSup $EtablissementInfoSup
     * @return SWSMiseAJourFicheEtablissement
     */
    public function withEtablissementInfoSup($EtablissementInfoSup)
    {
        $new = clone $this;
        $new->EtablissementInfoSup = $EtablissementInfoSup;

        return $new;
    }
}

