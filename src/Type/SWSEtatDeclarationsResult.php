<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSEtatDeclarationsResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEtatDeclaration
     */
    private $EtatDeclarations;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEtatDeclaration
     */
    public function getEtatDeclarations()
    {
        return $this->EtatDeclarations;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSEtatDeclaration $EtatDeclarations
     * @return SWSEtatDeclarationsResult
     */
    public function withEtatDeclarations($EtatDeclarations)
    {
        $new = clone $this;
        $new->EtatDeclarations = $EtatDeclarations;

        return $new;
    }
}

