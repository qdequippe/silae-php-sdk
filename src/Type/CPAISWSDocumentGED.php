<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSDocumentGED
{
    /**
     * @var string
     */
    private $Libelle;

    /**
     * @var string
     */
    private $Extension;

    /**
     * @var string
     */
    private $Contenu;

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param string $Libelle
     * @return CPAISWSDocumentGED
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
    public function getExtension()
    {
        return $this->Extension;
    }

    /**
     * @param string $Extension
     * @return CPAISWSDocumentGED
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
    public function getContenu()
    {
        return $this->Contenu;
    }

    /**
     * @param string $Contenu
     * @return CPAISWSDocumentGED
     */
    public function withContenu($Contenu)
    {
        $new = clone $this;
        $new->Contenu = $Contenu;

        return $new;
    }
}

