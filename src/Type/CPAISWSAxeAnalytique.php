<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSAxeAnalytique
{
    /**
     * @var string
     */
    private $TitreCategorie;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSousCategorie
     */
    private $SousCategorie;

    /**
     * @return string
     */
    public function getTitreCategorie()
    {
        return $this->TitreCategorie;
    }

    /**
     * @param string $TitreCategorie
     * @return CPAISWSAxeAnalytique
     */
    public function withTitreCategorie($TitreCategorie)
    {
        $new = clone $this;
        $new->TitreCategorie = $TitreCategorie;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSousCategorie
     */
    public function getSousCategorie()
    {
        return $this->SousCategorie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSousCategorie $SousCategorie
     * @return CPAISWSAxeAnalytique
     */
    public function withSousCategorie($SousCategorie)
    {
        $new = clone $this;
        $new->SousCategorie = $SousCategorie;

        return $new;
    }
}

