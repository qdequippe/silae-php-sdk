<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSRecuperationInformationsDomainesEtUtilisateursResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDomainesEtUtilisateurs
     */
    private $InformationsDomainesEtUtilisateurs;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDomainesEtUtilisateurs
     */
    public function getInformationsDomainesEtUtilisateurs()
    {
        return $this->InformationsDomainesEtUtilisateurs;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSInformationsDomainesEtUtilisateurs $InformationsDomainesEtUtilisateurs
     * @return SWSRecuperationInformationsDomainesEtUtilisateursResult
     */
    public function withInformationsDomainesEtUtilisateurs($InformationsDomainesEtUtilisateurs)
    {
        $new = clone $this;
        $new->InformationsDomainesEtUtilisateurs = $InformationsDomainesEtUtilisateurs;

        return $new;
    }
}

