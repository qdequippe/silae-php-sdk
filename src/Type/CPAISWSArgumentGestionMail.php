<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSArgumentGestionMail
{
    /**
     * @var bool
     */
    private $EnvoyerEmailDeValidation;

    /**
     * @var bool
     */
    private $RetournerEmailAModifier;

    /**
     * @return bool
     */
    public function getEnvoyerEmailDeValidation()
    {
        return $this->EnvoyerEmailDeValidation;
    }

    /**
     * @param bool $EnvoyerEmailDeValidation
     * @return CPAISWSArgumentGestionMail
     */
    public function withEnvoyerEmailDeValidation($EnvoyerEmailDeValidation)
    {
        $new = clone $this;
        $new->EnvoyerEmailDeValidation = $EnvoyerEmailDeValidation;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRetournerEmailAModifier()
    {
        return $this->RetournerEmailAModifier;
    }

    /**
     * @param bool $RetournerEmailAModifier
     * @return CPAISWSArgumentGestionMail
     */
    public function withRetournerEmailAModifier($RetournerEmailAModifier)
    {
        $new = clone $this;
        $new->RetournerEmailAModifier = $RetournerEmailAModifier;

        return $new;
    }
}

