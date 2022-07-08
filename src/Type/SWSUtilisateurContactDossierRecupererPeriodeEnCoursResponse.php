<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactDossierRecupererPeriodeEnCoursResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactDossierRecupererPeriodeEnCoursResult
     */
    private $SWS_UtilisateurContactDossierRecupererPeriodeEnCoursResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactDossierRecupererPeriodeEnCoursResult
     */
    public function getSWS_UtilisateurContactDossierRecupererPeriodeEnCoursResult()
    {
        return $this->SWS_UtilisateurContactDossierRecupererPeriodeEnCoursResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactDossierRecupererPeriodeEnCoursResult $SWS_UtilisateurContactDossierRecupererPeriodeEnCoursResult
     * @return SWSUtilisateurContactDossierRecupererPeriodeEnCoursResponse
     */
    public function withSWS_UtilisateurContactDossierRecupererPeriodeEnCoursResult($SWS_UtilisateurContactDossierRecupererPeriodeEnCoursResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactDossierRecupererPeriodeEnCoursResult = $SWS_UtilisateurContactDossierRecupererPeriodeEnCoursResult;

        return $new;
    }
}

