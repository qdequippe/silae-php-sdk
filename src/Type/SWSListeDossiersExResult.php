<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeDossiersExResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCSWSInformationsDossierEx
     */
    private $ListeDossiers;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCSWSInformationsDossierEx
     */
    public function getListeDossiers()
    {
        return $this->ListeDossiers;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCSWSInformationsDossierEx $ListeDossiers
     * @return SWSListeDossiersExResult
     */
    public function withListeDossiers($ListeDossiers)
    {
        $new = clone $this;
        $new->ListeDossiers = $ListeDossiers;

        return $new;
    }
}

