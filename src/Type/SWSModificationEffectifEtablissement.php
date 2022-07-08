<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SWSModificationEffectifEtablissement implements RequestInterface
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
    private $NomInterneEtablissement;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifEtablissement
     */
    private $EffectifEtablissement;

    /**
     * Constructor
     *
     * @var string $Token
     * @var string $NumeroDossier
     * @var string $NomInterneEtablissement
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifEtablissement $EffectifEtablissement
     */
    public function __construct($Token, $NumeroDossier, $NomInterneEtablissement, $EffectifEtablissement)
    {
        $this->Token = $Token;
        $this->NumeroDossier = $NumeroDossier;
        $this->NomInterneEtablissement = $NomInterneEtablissement;
        $this->EffectifEtablissement = $EffectifEtablissement;
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
     * @return SWSModificationEffectifEtablissement
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
     * @return SWSModificationEffectifEtablissement
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
    public function getNomInterneEtablissement()
    {
        return $this->NomInterneEtablissement;
    }

    /**
     * @param string $NomInterneEtablissement
     * @return SWSModificationEffectifEtablissement
     */
    public function withNomInterneEtablissement($NomInterneEtablissement)
    {
        $new = clone $this;
        $new->NomInterneEtablissement = $NomInterneEtablissement;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifEtablissement
     */
    public function getEffectifEtablissement()
    {
        return $this->EffectifEtablissement;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEffectifEtablissement $EffectifEtablissement
     * @return SWSModificationEffectifEtablissement
     */
    public function withEffectifEtablissement($EffectifEtablissement)
    {
        $new = clone $this;
        $new->EffectifEtablissement = $EffectifEtablissement;

        return $new;
    }
}

