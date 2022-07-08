<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSDSNMensuelle
{
    /**
     * @var string
     */
    private $Etablissement;

    /**
     * @var string
     */
    private $CodeOrganisme;

    /**
     * @var string
     */
    private $NumeroAffiliation;

    /**
     * @var int
     */
    private $TypeDSN;

    /**
     * @return string
     */
    public function getEtablissement()
    {
        return $this->Etablissement;
    }

    /**
     * @param string $Etablissement
     * @return CPAISWSDSNMensuelle
     */
    public function withEtablissement($Etablissement)
    {
        $new = clone $this;
        $new->Etablissement = $Etablissement;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeOrganisme()
    {
        return $this->CodeOrganisme;
    }

    /**
     * @param string $CodeOrganisme
     * @return CPAISWSDSNMensuelle
     */
    public function withCodeOrganisme($CodeOrganisme)
    {
        $new = clone $this;
        $new->CodeOrganisme = $CodeOrganisme;

        return $new;
    }

    /**
     * @return string
     */
    public function getNumeroAffiliation()
    {
        return $this->NumeroAffiliation;
    }

    /**
     * @param string $NumeroAffiliation
     * @return CPAISWSDSNMensuelle
     */
    public function withNumeroAffiliation($NumeroAffiliation)
    {
        $new = clone $this;
        $new->NumeroAffiliation = $NumeroAffiliation;

        return $new;
    }

    /**
     * @return int
     */
    public function getTypeDSN()
    {
        return $this->TypeDSN;
    }

    /**
     * @param int $TypeDSN
     * @return CPAISWSDSNMensuelle
     */
    public function withTypeDSN($TypeDSN)
    {
        $new = clone $this;
        $new->TypeDSN = $TypeDSN;

        return $new;
    }
}

