<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSAcquisitionContenuPartielDSNResult
{
    /**
     * @var string
     */
    private $ContenuPartiel;

    /**
     * @return string
     */
    public function getContenuPartiel()
    {
        return $this->ContenuPartiel;
    }

    /**
     * @param string $ContenuPartiel
     * @return SWSAcquisitionContenuPartielDSNResult
     */
    public function withContenuPartiel($ContenuPartiel)
    {
        $new = clone $this;
        $new->ContenuPartiel = $ContenuPartiel;

        return $new;
    }
}

