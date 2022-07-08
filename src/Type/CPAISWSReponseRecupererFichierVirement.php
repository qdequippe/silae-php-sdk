<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSReponseRecupererFichierVirement
{
    /**
     * @var string
     */
    private $Fichier;

    /**
     * @var string
     */
    private $Contenu;

    /**
     * @return string
     */
    public function getFichier()
    {
        return $this->Fichier;
    }

    /**
     * @param string $Fichier
     * @return CPAISWSReponseRecupererFichierVirement
     */
    public function withFichier($Fichier)
    {
        $new = clone $this;
        $new->Fichier = $Fichier;

        return $new;
    }

    /**
     * @return string
     */
    public function getContenu()
    {
        return $this->Contenu;
    }

    /**
     * @param string $Contenu
     * @return CPAISWSReponseRecupererFichierVirement
     */
    public function withContenu($Contenu)
    {
        $new = clone $this;
        $new->Contenu = $Contenu;

        return $new;
    }
}

