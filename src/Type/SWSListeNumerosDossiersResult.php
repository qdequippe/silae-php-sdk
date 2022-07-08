<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeNumerosDossiersResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $ListeNumerosDossiers;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getListeNumerosDossiers()
    {
        return $this->ListeNumerosDossiers;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $ListeNumerosDossiers
     * @return SWSListeNumerosDossiersResult
     */
    public function withListeNumerosDossiers($ListeNumerosDossiers)
    {
        $new = clone $this;
        $new->ListeNumerosDossiers = $ListeNumerosDossiers;

        return $new;
    }
}

