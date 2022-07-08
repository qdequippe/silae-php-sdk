<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationEffectifSociete implements RequestInterface
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
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifSociete
     */
    private $EffectifSociete;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifSociete $EffectifSociete
     */
    public function __construct($Token, $NumeroDossier, $EffectifSociete)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->EffectifSociete = $EffectifSociete;
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
     * @return SWSModificationEffectifSociete
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
     * @return SWSModificationEffectifSociete
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifSociete
     */
    public function getEffectifSociete()
    {
        return $this->EffectifSociete;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifSociete $EffectifSociete
     * @return SWSModificationEffectifSociete
     */
    public function withEffectifSociete($EffectifSociete)
    {
        $new = clone $this;
        $new->EffectifSociete = $EffectifSociete;

        return $new;
    }
}

