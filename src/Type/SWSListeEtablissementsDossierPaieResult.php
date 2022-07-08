<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeEtablissementsDossierPaieResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationsEtablissement
     */
    private $InformationsEtablissements;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationsEtablissement
     */
    public function getInformationsEtablissements()
    {
        return $this->InformationsEtablissements;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationsEtablissement $InformationsEtablissements
     * @return SWSListeEtablissementsDossierPaieResult
     */
    public function withInformationsEtablissements($InformationsEtablissements)
    {
        $new = clone $this;
        $new->InformationsEtablissements = $InformationsEtablissements;

        return $new;
    }
}

