<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSAdministrationCollaborateurEnregistrementResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSAdministrationCollaborateurEnregistrementResult
     */
    private $SWS_AdministrationCollaborateurEnregistrementResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSAdministrationCollaborateurEnregistrementResult
     */
    public function getSWS_AdministrationCollaborateurEnregistrementResult()
    {
        return $this->SWS_AdministrationCollaborateurEnregistrementResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSAdministrationCollaborateurEnregistrementResult $SWS_AdministrationCollaborateurEnregistrementResult
     * @return SWSAdministrationCollaborateurEnregistrementResponse
     */
    public function withSWS_AdministrationCollaborateurEnregistrementResult($SWS_AdministrationCollaborateurEnregistrementResult)
    {
        $new = clone $this;
        $new->SWS_AdministrationCollaborateurEnregistrementResult = $SWS_AdministrationCollaborateurEnregistrementResult;

        return $new;
    }
}

