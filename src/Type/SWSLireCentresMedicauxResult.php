<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLireCentresMedicauxResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCentreMedical
     */
    private $CentresMedicaux;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCentreMedical
     */
    public function getCentresMedicaux()
    {
        return $this->CentresMedicaux;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCentreMedical $CentresMedicaux
     * @return SWSLireCentresMedicauxResult
     */
    public function withCentresMedicaux($CentresMedicaux)
    {
        $new = clone $this;
        $new->CentresMedicaux = $CentresMedicaux;

        return $new;
    }
}

