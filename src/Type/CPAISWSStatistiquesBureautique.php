<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSStatistiquesBureautique
{
    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var int
     */
    private $NbDocumentsCrees;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSStatistiquesBureautique
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return int
     */
    public function getNbDocumentsCrees()
    {
        return $this->NbDocumentsCrees;
    }

    /**
     * @param int $NbDocumentsCrees
     * @return CPAISWSStatistiquesBureautique
     */
    public function withNbDocumentsCrees($NbDocumentsCrees)
    {
        $new = clone $this;
        $new->NbDocumentsCrees = $NbDocumentsCrees;

        return $new;
    }
}

