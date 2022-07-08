<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactAcquisitionSalariesFiltreResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSalarieFiltre
     */
    private $SalarieFiltre;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSalarieFiltre
     */
    public function getSalarieFiltre()
    {
        return $this->SalarieFiltre;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSalarieFiltre $SalarieFiltre
     * @return SWSUtilisateurContactAcquisitionSalariesFiltreResult
     */
    public function withSalarieFiltre($SalarieFiltre)
    {
        $new = clone $this;
        $new->SalarieFiltre = $SalarieFiltre;

        return $new;
    }
}

