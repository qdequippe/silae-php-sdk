<?php

namespace Qdequippe\SilaePhpSdk\Type;

class CPAISWSInformationsDomainesEtUtilisateurs
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationsDomaine
     */
    private $InformationsDomaines;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationUtilisateur
     */
    private $InformationsUtilisateurs;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationsDomaine
     */
    public function getInformationsDomaines()
    {
        return $this->InformationsDomaines;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationsDomaine $InformationsDomaines
     * @return CPAISWSInformationsDomainesEtUtilisateurs
     */
    public function withInformationsDomaines($InformationsDomaines)
    {
        $new = clone $this;
        $new->InformationsDomaines = $InformationsDomaines;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationUtilisateur
     */
    public function getInformationsUtilisateurs()
    {
        return $this->InformationsUtilisateurs;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationUtilisateur $InformationsUtilisateurs
     * @return CPAISWSInformationsDomainesEtUtilisateurs
     */
    public function withInformationsUtilisateurs($InformationsUtilisateurs)
    {
        $new = clone $this;
        $new->InformationsUtilisateurs = $InformationsUtilisateurs;

        return $new;
    }
}

