<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSAdministrationCollaborateurLectureResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CSWSUtilisateurCollaborateur
     */
    private $UtilisateurCollaborateur;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CSWSUtilisateurCollaborateur
     */
    public function getUtilisateurCollaborateur()
    {
        return $this->UtilisateurCollaborateur;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CSWSUtilisateurCollaborateur $UtilisateurCollaborateur
     * @return SWSAdministrationCollaborateurLectureResult
     */
    public function withUtilisateurCollaborateur($UtilisateurCollaborateur)
    {
        $new = clone $this;
        $new->UtilisateurCollaborateur = $UtilisateurCollaborateur;

        return $new;
    }
}

