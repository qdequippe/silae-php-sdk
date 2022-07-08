<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeDSNMensuellesResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDSNMensuelle
     */
    private $ListeDSNMensuelles;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDSNMensuelle
     */
    public function getListeDSNMensuelles()
    {
        return $this->ListeDSNMensuelles;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSDSNMensuelle $ListeDSNMensuelles
     * @return SWSListeDSNMensuellesResult
     */
    public function withListeDSNMensuelles($ListeDSNMensuelles)
    {
        $new = clone $this;
        $new->ListeDSNMensuelles = $ListeDSNMensuelles;

        return $new;
    }
}

