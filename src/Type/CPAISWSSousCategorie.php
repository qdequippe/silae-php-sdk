<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSSousCategorie
{
    /**
     * @var string
     */
    private $NomSousCategorie;

    /**
     * @var string
     */
    private $NouveauNomSousCategorie;

    /**
     * @return string
     */
    public function getNomSousCategorie()
    {
        return $this->NomSousCategorie;
    }

    /**
     * @param string $NomSousCategorie
     * @return CPAISWSSousCategorie
     */
    public function withNomSousCategorie($NomSousCategorie)
    {
        $new = clone $this;
        $new->NomSousCategorie = $NomSousCategorie;

        return $new;
    }

    /**
     * @return string
     */
    public function getNouveauNomSousCategorie()
    {
        return $this->NouveauNomSousCategorie;
    }

    /**
     * @param string $NouveauNomSousCategorie
     * @return CPAISWSSousCategorie
     */
    public function withNouveauNomSousCategorie($NouveauNomSousCategorie)
    {
        $new = clone $this;
        $new->NouveauNomSousCategorie = $NouveauNomSousCategorie;

        return $new;
    }
}

