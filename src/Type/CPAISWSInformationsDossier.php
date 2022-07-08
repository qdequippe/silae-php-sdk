<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSInformationsDossier
{
    /**
     * @var string
     */
    private $NumeroDossier;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $ConventionsCollectives;

    /**
     * @return string
     */
    public function getNumeroDossier()
    {
        return $this->NumeroDossier;
    }

    /**
     * @param string $NumeroDossier
     * @return CPAISWSInformationsDossier
     */
    public function withNumeroDossier($NumeroDossier)
    {
        $new = clone $this;
        $new->NumeroDossier = $NumeroDossier;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getConventionsCollectives()
    {
        return $this->ConventionsCollectives;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $ConventionsCollectives
     * @return CPAISWSInformationsDossier
     */
    public function withConventionsCollectives($ConventionsCollectives)
    {
        $new = clone $this;
        $new->ConventionsCollectives = $ConventionsCollectives;

        return $new;
    }
}

