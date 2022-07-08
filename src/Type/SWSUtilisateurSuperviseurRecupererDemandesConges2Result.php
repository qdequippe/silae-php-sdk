<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSuperviseurRecupererDemandesConges2Result
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsence2
     */
    private $DemandesConges;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsence2
     */
    public function getDemandesConges()
    {
        return $this->DemandesConges;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSUtilisateurSalarieAbsence2 $DemandesConges
     * @return SWSUtilisateurSuperviseurRecupererDemandesConges2Result
     */
    public function withDemandesConges($DemandesConges)
    {
        $new = clone $this;
        $new->DemandesConges = $DemandesConges;

        return $new;
    }
}

