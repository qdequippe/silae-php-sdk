<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSousCategoriesEnPC
{
    /**
     * @var string
     */
    private $SousCategorie;

    /**
     * @var float
     */
    private $PC;

    /**
     * @return string
     */
    public function getSousCategorie()
    {
        return $this->SousCategorie;
    }

    /**
     * @param string $SousCategorie
     * @return CPAISWSSousCategoriesEnPC
     */
    public function withSousCategorie($SousCategorie)
    {
        $new = clone $this;
        $new->SousCategorie = $SousCategorie;

        return $new;
    }

    /**
     * @return float
     */
    public function getPC()
    {
        return $this->PC;
    }

    /**
     * @param float $PC
     * @return CPAISWSSousCategoriesEnPC
     */
    public function withPC($PC)
    {
        $new = clone $this;
        $new->PC = $PC;

        return $new;
    }
}

