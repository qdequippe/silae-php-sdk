<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactLireCentresMedicauxResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPortailCentreMedical
     */
    private $CentresMedicaux;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPortailCentreMedical
     */
    public function getCentresMedicaux()
    {
        return $this->CentresMedicaux;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPortailCentreMedical $CentresMedicaux
     * @return SWSUtilisateurContactLireCentresMedicauxResult
     */
    public function withCentresMedicaux($CentresMedicaux)
    {
        $new = clone $this;
        $new->CentresMedicaux = $CentresMedicaux;

        return $new;
    }
}

