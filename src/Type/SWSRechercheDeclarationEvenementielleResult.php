<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSRechercheDeclarationEvenementielleResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDeclarationEvenementielle
     */
    private $ListeDeclarationEvenementielle;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDeclarationEvenementielle
     */
    public function getListeDeclarationEvenementielle()
    {
        return $this->ListeDeclarationEvenementielle;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDeclarationEvenementielle $ListeDeclarationEvenementielle
     * @return SWSRechercheDeclarationEvenementielleResult
     */
    public function withListeDeclarationEvenementielle($ListeDeclarationEvenementielle)
    {
        $new = clone $this;
        $new->ListeDeclarationEvenementielle = $ListeDeclarationEvenementielle;

        return $new;
    }
}

