<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSAffectationDossierPaieLectureResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $AffectationDossier;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getAffectationDossier()
    {
        return $this->AffectationDossier;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $AffectationDossier
     * @return SWSAffectationDossierPaieLectureResult
     */
    public function withAffectationDossier($AffectationDossier)
    {
        $new = clone $this;
        $new->AffectationDossier = $AffectationDossier;

        return $new;
    }
}

