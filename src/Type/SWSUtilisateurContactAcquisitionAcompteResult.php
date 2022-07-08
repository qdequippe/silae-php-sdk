<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSUtilisateurContactAcquisitionAcompteResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieTM
     */
    private $Salaries;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAcompteTM
     */
    private $Acomptes;

    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPresenceSalarieTM
     */
    private $PresencesSalaries;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieTM
     */
    public function getSalaries()
    {
        return $this->Salaries;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSSalarieTM $Salaries
     * @return SWSUtilisateurContactAcquisitionAcompteResult
     */
    public function withSalaries($Salaries)
    {
        $new = clone $this;
        $new->Salaries = $Salaries;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAcompteTM
     */
    public function getAcomptes()
    {
        return $this->Acomptes;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSAcompteTM $Acomptes
     * @return SWSUtilisateurContactAcquisitionAcompteResult
     */
    public function withAcomptes($Acomptes)
    {
        $new = clone $this;
        $new->Acomptes = $Acomptes;

        return $new;
    }

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPresenceSalarieTM
     */
    public function getPresencesSalaries()
    {
        return $this->PresencesSalaries;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSPresenceSalarieTM $PresencesSalaries
     * @return SWSUtilisateurContactAcquisitionAcompteResult
     */
    public function withPresencesSalaries($PresencesSalaries)
    {
        $new = clone $this;
        $new->PresencesSalaries = $PresencesSalaries;

        return $new;
    }
}

