<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSSalarieSyntheseCarriereResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieElementCarriere
     */
    private $SyntheseCarriere;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieElementCarriere
     */
    public function getSyntheseCarriere()
    {
        return $this->SyntheseCarriere;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieElementCarriere $SyntheseCarriere
     * @return SWSSalarieSyntheseCarriereResult
     */
    public function withSyntheseCarriere($SyntheseCarriere)
    {
        $new = clone $this;
        $new->SyntheseCarriere = $SyntheseCarriere;

        return $new;
    }
}

