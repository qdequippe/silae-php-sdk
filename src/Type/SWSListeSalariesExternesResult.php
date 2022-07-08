<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeSalariesExternesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieBase
     */
    private $ListeSalariesExternes;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieBase
     */
    public function getListeSalariesExternes()
    {
        return $this->ListeSalariesExternes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieBase $ListeSalariesExternes
     * @return SWSListeSalariesExternesResult
     */
    public function withListeSalariesExternes($ListeSalariesExternes)
    {
        $new = clone $this;
        $new->ListeSalariesExternes = $ListeSalariesExternes;

        return $new;
    }
}

