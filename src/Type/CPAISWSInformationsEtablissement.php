<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSInformationsEtablissement
{
    /**
     * @var string
     */
    private $NomInterne;

    /**
     * @var string
     */
    private $Siret;

    /**
     * @var bool
     */
    private $EtablissementPrincipal;

    /**
     * @return string
     */
    public function getNomInterne()
    {
        return $this->NomInterne;
    }

    /**
     * @param string $NomInterne
     * @return CPAISWSInformationsEtablissement
     */
    public function withNomInterne($NomInterne)
    {
        $new = clone $this;
        $new->NomInterne = $NomInterne;

        return $new;
    }

    /**
     * @return string
     */
    public function getSiret()
    {
        return $this->Siret;
    }

    /**
     * @param string $Siret
     * @return CPAISWSInformationsEtablissement
     */
    public function withSiret($Siret)
    {
        $new = clone $this;
        $new->Siret = $Siret;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEtablissementPrincipal()
    {
        return $this->EtablissementPrincipal;
    }

    /**
     * @param bool $EtablissementPrincipal
     * @return CPAISWSInformationsEtablissement
     */
    public function withEtablissementPrincipal($EtablissementPrincipal)
    {
        $new = clone $this;
        $new->EtablissementPrincipal = $EtablissementPrincipal;

        return $new;
    }
}

