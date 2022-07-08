<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeMatriculesDupliquesDansDomaineResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCoupleDossierMatricule
     */
    private $ListeCoupleDossierMatricule;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCoupleDossierMatricule
     */
    public function getListeCoupleDossierMatricule()
    {
        return $this->ListeCoupleDossierMatricule;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSCoupleDossierMatricule $ListeCoupleDossierMatricule
     * @return SWSListeMatriculesDupliquesDansDomaineResult
     */
    public function withListeCoupleDossierMatricule($ListeCoupleDossierMatricule)
    {
        $new = clone $this;
        $new->ListeCoupleDossierMatricule = $ListeCoupleDossierMatricule;

        return $new;
    }
}

