<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSQuestionnaireContratComplementaireResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSQContratComplementaire
     */
    private $QContratComplementaire;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSQContratComplementaire
     */
    public function getQContratComplementaire()
    {
        return $this->QContratComplementaire;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSQContratComplementaire $QContratComplementaire
     * @return SWSQuestionnaireContratComplementaireResult
     */
    public function withQContratComplementaire($QContratComplementaire)
    {
        $new = clone $this;
        $new->QContratComplementaire = $QContratComplementaire;

        return $new;
    }
}

