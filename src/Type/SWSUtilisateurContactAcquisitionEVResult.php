<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactAcquisitionEVResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSElementVariableTM
     */
    private $ListeColonnes;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEmploiElementsVariablesTM
     */
    private $SalariesEmploiContenu;

    /**
     * @var bool
     */
    private $PeriodeConfirmeePourMoi;

    /**
     * @var bool
     */
    private $PeriodeConfirmeeGlobalement;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSElementVariableTM
     */
    public function getListeColonnes()
    {
        return $this->ListeColonnes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSElementVariableTM $ListeColonnes
     * @return SWSUtilisateurContactAcquisitionEVResult
     */
    public function withListeColonnes($ListeColonnes)
    {
        $new = clone $this;
        $new->ListeColonnes = $ListeColonnes;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEmploiElementsVariablesTM
     */
    public function getSalariesEmploiContenu()
    {
        return $this->SalariesEmploiContenu;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieEmploiElementsVariablesTM $SalariesEmploiContenu
     * @return SWSUtilisateurContactAcquisitionEVResult
     */
    public function withSalariesEmploiContenu($SalariesEmploiContenu)
    {
        $new = clone $this;
        $new->SalariesEmploiContenu = $SalariesEmploiContenu;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPeriodeConfirmeePourMoi()
    {
        return $this->PeriodeConfirmeePourMoi;
    }

    /**
     * @param bool $PeriodeConfirmeePourMoi
     * @return SWSUtilisateurContactAcquisitionEVResult
     */
    public function withPeriodeConfirmeePourMoi($PeriodeConfirmeePourMoi)
    {
        $new = clone $this;
        $new->PeriodeConfirmeePourMoi = $PeriodeConfirmeePourMoi;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPeriodeConfirmeeGlobalement()
    {
        return $this->PeriodeConfirmeeGlobalement;
    }

    /**
     * @param bool $PeriodeConfirmeeGlobalement
     * @return SWSUtilisateurContactAcquisitionEVResult
     */
    public function withPeriodeConfirmeeGlobalement($PeriodeConfirmeeGlobalement)
    {
        $new = clone $this;
        $new->PeriodeConfirmeeGlobalement = $PeriodeConfirmeeGlobalement;

        return $new;
    }
}

