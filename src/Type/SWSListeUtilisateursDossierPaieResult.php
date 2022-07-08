<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeUtilisateursDossierPaieResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $ListeUtilisateursDossierPaie;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getListeUtilisateursDossierPaie()
    {
        return $this->ListeUtilisateursDossierPaie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $ListeUtilisateursDossierPaie
     * @return SWSListeUtilisateursDossierPaieResult
     */
    public function withListeUtilisateursDossierPaie($ListeUtilisateursDossierPaie)
    {
        $new = clone $this;
        $new->ListeUtilisateursDossierPaie = $ListeUtilisateursDossierPaie;

        return $new;
    }
}

