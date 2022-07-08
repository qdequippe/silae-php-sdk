<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeSalarieEmploisResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEmploiInformations
     */
    private $ListeSalarieEmplois;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEmploiInformations
     */
    public function getListeSalarieEmplois()
    {
        return $this->ListeSalarieEmplois;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEmploiInformations $ListeSalarieEmplois
     * @return SWSListeSalarieEmploisResult
     */
    public function withListeSalarieEmplois($ListeSalarieEmplois)
    {
        $new = clone $this;
        $new->ListeSalarieEmplois = $ListeSalarieEmplois;

        return $new;
    }
}

