<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSExtraListeManifestationsResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSExtraManifestation
     */
    private $Manifestations;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSExtraManifestation
     */
    public function getManifestations()
    {
        return $this->Manifestations;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSExtraManifestation $Manifestations
     * @return SWSExtraListeManifestationsResult
     */
    public function withManifestations($Manifestations)
    {
        $new = clone $this;
        $new->Manifestations = $Manifestations;

        return $new;
    }
}

