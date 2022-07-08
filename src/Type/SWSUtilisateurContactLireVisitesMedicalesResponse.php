<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurContactLireVisitesMedicalesResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactLireVisitesMedicalesResult
     */
    private $SWS_UtilisateurContactLireVisitesMedicalesResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactLireVisitesMedicalesResult
     */
    public function getSWS_UtilisateurContactLireVisitesMedicalesResult()
    {
        return $this->SWS_UtilisateurContactLireVisitesMedicalesResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurContactLireVisitesMedicalesResult $SWS_UtilisateurContactLireVisitesMedicalesResult
     * @return SWSUtilisateurContactLireVisitesMedicalesResponse
     */
    public function withSWS_UtilisateurContactLireVisitesMedicalesResult($SWS_UtilisateurContactLireVisitesMedicalesResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurContactLireVisitesMedicalesResult = $SWS_UtilisateurContactLireVisitesMedicalesResult;

        return $new;
    }
}

