<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeSalariesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieInformations
     */
    private $ListeSalariesInformations;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieInformations
     */
    public function getListeSalariesInformations()
    {
        return $this->ListeSalariesInformations;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieInformations $ListeSalariesInformations
     * @return SWSListeSalariesResult
     */
    public function withListeSalariesInformations($ListeSalariesInformations)
    {
        $new = clone $this;
        $new->ListeSalariesInformations = $ListeSalariesInformations;

        return $new;
    }
}

