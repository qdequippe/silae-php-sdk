<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSuperviseurSimulerCompteursSalarieResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieCompteursConges
     */
    private $CompteursConges;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieCompteursConges
     */
    public function getCompteursConges()
    {
        return $this->CompteursConges;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieCompteursConges $CompteursConges
     * @return SWSUtilisateurSuperviseurSimulerCompteursSalarieResult
     */
    public function withCompteursConges($CompteursConges)
    {
        $new = clone $this;
        $new->CompteursConges = $CompteursConges;

        return $new;
    }
}

