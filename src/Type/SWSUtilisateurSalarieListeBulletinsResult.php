<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSalarieListeBulletinsResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieListeBulletinsElement
     */
    private $Elements;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieListeBulletinsElement
     */
    public function getElements()
    {
        return $this->Elements;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieListeBulletinsElement $Elements
     * @return SWSUtilisateurSalarieListeBulletinsResult
     */
    public function withElements($Elements)
    {
        $new = clone $this;
        $new->Elements = $Elements;

        return $new;
    }
}

