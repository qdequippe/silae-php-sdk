<?php

namespace Qdequippe\SilaePhpSdk\Type;

class BilanMatricules
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $MatriculesInclus;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $MatriculesExclus;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getMatriculesInclus()
    {
        return $this->MatriculesInclus;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $MatriculesInclus
     * @return BilanMatricules
     */
    public function withMatriculesInclus($MatriculesInclus)
    {
        $new = clone $this;
        $new->MatriculesInclus = $MatriculesInclus;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getMatriculesExclus()
    {
        return $this->MatriculesExclus;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $MatriculesExclus
     * @return BilanMatricules
     */
    public function withMatriculesExclus($MatriculesExclus)
    {
        $new = clone $this;
        $new->MatriculesExclus = $MatriculesExclus;

        return $new;
    }
}

