<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSLectureCCNSocieteResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCCNSociete
     */
    private $CCNSociete;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCCNSociete
     */
    public function getCCNSociete()
    {
        return $this->CCNSociete;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCCNSociete $CCNSociete
     * @return SWSLectureCCNSocieteResult
     */
    public function withCCNSociete($CCNSociete)
    {
        $new = clone $this;
        $new->CCNSociete = $CCNSociete;

        return $new;
    }
}

