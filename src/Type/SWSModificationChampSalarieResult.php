<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSModificationChampSalarieResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp
     */
    private $ChampEnErreur;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp
     */
    public function getChampEnErreur()
    {
        return $this->ChampEnErreur;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSModificationChamp $ChampEnErreur
     * @return SWSModificationChampSalarieResult
     */
    public function withChampEnErreur($ChampEnErreur)
    {
        $new = clone $this;
        $new->ChampEnErreur = $ChampEnErreur;

        return $new;
    }
}

