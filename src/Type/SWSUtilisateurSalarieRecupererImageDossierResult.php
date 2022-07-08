<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurSalarieRecupererImageDossierResult
{
    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Extension;

    /**
     * @var string
     */
    private $Libelle;

    /**
     * @var string
     */
    private $Image;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return SWSUtilisateurSalarieRecupererImageDossierResult
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->Extension;
    }

    /**
     * @param string $Extension
     * @return SWSUtilisateurSalarieRecupererImageDossierResult
     */
    public function withExtension($Extension)
    {
        $new = clone $this;
        $new->Extension = $Extension;

        return $new;
    }

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return SWSUtilisateurSalarieRecupererImageDossierResult
     */
    public function withLibelle($Libelle)
    {
        $new = clone $this;
        $new->Libelle = $Libelle;

        return $new;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param string $Image
     * @return SWSUtilisateurSalarieRecupererImageDossierResult
     */
    public function withImage($Image)
    {
        $new = clone $this;
        $new->Image = $Image;

        return $new;
    }
}

