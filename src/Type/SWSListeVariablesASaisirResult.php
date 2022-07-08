<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeVariablesASaisirResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSVariableASaisir
     */
    private $ListeVariablesASaisir;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSVariableASaisir
     */
    public function getListeVariablesASaisir()
    {
        return $this->ListeVariablesASaisir;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSVariableASaisir $ListeVariablesASaisir
     * @return SWSListeVariablesASaisirResult
     */
    public function withListeVariablesASaisir($ListeVariablesASaisir)
    {
        $new = clone $this;
        $new->ListeVariablesASaisir = $ListeVariablesASaisir;

        return $new;
    }
}

