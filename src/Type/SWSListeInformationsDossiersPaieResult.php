<?php

namespace Qdequippe\SilaePhpSdk\Type;

class SWSListeInformationsDossiersPaieResult
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationsDossier
     */
    private $InformationsDossiersDePaie;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationsDossier
     */
    public function getInformationsDossiersDePaie()
    {
        return $this->InformationsDossiersDePaie;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\ArrayOfCPAISWSInformationsDossier $InformationsDossiersDePaie
     * @return SWSListeInformationsDossiersPaieResult
     */
    public function withInformationsDossiersDePaie($InformationsDossiersDePaie)
    {
        $new = clone $this;
        $new->InformationsDossiersDePaie = $InformationsDossiersDePaie;

        return $new;
    }
}

