<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactLireCentresMedicauxResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactLireCentresMedicauxResult
     */
    private $SWS_UtilisateurContactLireCentresMedicauxResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactLireCentresMedicauxResult
     */
    public function getSWS_UtilisateurContactLireCentresMedicauxResult()
    {
        return $this->SWS_UtilisateurContactLireCentresMedicauxResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactLireCentresMedicauxResult $SWS_UtilisateurContactLireCentresMedicauxResult
     * @return SWSUtilisateurContactLireCentresMedicauxResponse
     */
    public function withSWS_UtilisateurContactLireCentresMedicauxResult($SWS_UtilisateurContactLireCentresMedicauxResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactLireCentresMedicauxResult = $SWS_UtilisateurContactLireCentresMedicauxResult;

        return $new;
    }
}

