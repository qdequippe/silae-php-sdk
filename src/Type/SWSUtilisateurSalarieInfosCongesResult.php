<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSalarieInfosCongesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieCompteursConges
     */
    private $CompteursConges;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieDemandeConges
     */
    private $DemandesConges;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieCompteursConges
     */
    public function getCompteursConges()
    {
        return $this->CompteursConges;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSUtilisateurSalarieCompteursConges $CompteursConges
     * @return SWSUtilisateurSalarieInfosCongesResult
     */
    public function withCompteursConges($CompteursConges)
    {
        $new = clone $this;
        $new->CompteursConges = $CompteursConges;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieDemandeConges
     */
    public function getDemandesConges()
    {
        return $this->DemandesConges;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieDemandeConges $DemandesConges
     * @return SWSUtilisateurSalarieInfosCongesResult
     */
    public function withDemandesConges($DemandesConges)
    {
        $new = clone $this;
        $new->DemandesConges = $DemandesConges;

        return $new;
    }
}

