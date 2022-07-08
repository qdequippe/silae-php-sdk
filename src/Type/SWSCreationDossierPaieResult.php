<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSCreationDossierPaieResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $NomsInternesEtablissements;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getNomsInternesEtablissements()
    {
        return $this->NomsInternesEtablissements;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $NomsInternesEtablissements
     * @return SWSCreationDossierPaieResult
     */
    public function withNomsInternesEtablissements($NomsInternesEtablissements)
    {
        $new = clone $this;
        $new->NomsInternesEtablissements = $NomsInternesEtablissements;

        return $new;
    }
}

