<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeMatriculesDupliquesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    private $MatriculesDupliques;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfString
     */
    public function getMatriculesDupliques()
    {
        return $this->MatriculesDupliques;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfString $MatriculesDupliques
     * @return SWSListeMatriculesDupliquesResult
     */
    public function withMatriculesDupliques($MatriculesDupliques)
    {
        $new = clone $this;
        $new->MatriculesDupliques = $MatriculesDupliques;

        return $new;
    }
}

