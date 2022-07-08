<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeDossiersResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCSWSInformationsDossier
     */
    private $ListeDossiers;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCSWSInformationsDossier
     */
    public function getListeDossiers()
    {
        return $this->ListeDossiers;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCSWSInformationsDossier $ListeDossiers
     * @return SWSListeDossiersResult
     */
    public function withListeDossiers($ListeDossiers)
    {
        $new = clone $this;
        $new->ListeDossiers = $ListeDossiers;

        return $new;
    }
}

