<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactEtatTMResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\CPAISWSConfirmationPeriode
     */
    private $Confirmation;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieRecapValidationTM
     */
    private $DonneesSAL;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSColonneRecapValidationTM
     */
    private $LstColonnes;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\CPAISWSConfirmationPeriode
     */
    public function getConfirmation()
    {
        return $this->Confirmation;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\CPAISWSConfirmationPeriode $Confirmation
     * @return SWSUtilisateurContactEtatTMResult
     */
    public function withConfirmation($Confirmation)
    {
        $new = clone $this;
        $new->Confirmation = $Confirmation;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieRecapValidationTM
     */
    public function getDonneesSAL()
    {
        return $this->DonneesSAL;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieRecapValidationTM $DonneesSAL
     * @return SWSUtilisateurContactEtatTMResult
     */
    public function withDonneesSAL($DonneesSAL)
    {
        $new = clone $this;
        $new->DonneesSAL = $DonneesSAL;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSColonneRecapValidationTM
     */
    public function getLstColonnes()
    {
        return $this->LstColonnes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSColonneRecapValidationTM $LstColonnes
     * @return SWSUtilisateurContactEtatTMResult
     */
    public function withLstColonnes($LstColonnes)
    {
        $new = clone $this;
        $new->LstColonnes = $LstColonnes;

        return $new;
    }
}

