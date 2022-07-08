<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeSalarieEmploisExternesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEmploiExterneInformations
     */
    private $ListeSalarieEmploisExternes;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEmploiExterneInformations
     */
    public function getListeSalarieEmploisExternes()
    {
        return $this->ListeSalarieEmploisExternes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEmploiExterneInformations $ListeSalarieEmploisExternes
     * @return SWSListeSalarieEmploisExternesResult
     */
    public function withListeSalarieEmploisExternes($ListeSalarieEmploisExternes)
    {
        $new = clone $this;
        $new->ListeSalarieEmploisExternes = $ListeSalarieEmploisExternes;

        return $new;
    }
}

