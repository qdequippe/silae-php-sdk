<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSUtilisateurSuperviseurSimulerCompteursSalarieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSimulerCompteursSalarieResult
     */
    private $SWS_UtilisateurSuperviseurSimulerCompteursSalarieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSimulerCompteursSalarieResult
     */
    public function getSWS_UtilisateurSuperviseurSimulerCompteursSalarieResult()
    {
        return $this->SWS_UtilisateurSuperviseurSimulerCompteursSalarieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSUtilisateurSuperviseurSimulerCompteursSalarieResult $SWS_UtilisateurSuperviseurSimulerCompteursSalarieResult
     * @return SWSUtilisateurSuperviseurSimulerCompteursSalarieResponse
     */
    public function withSWS_UtilisateurSuperviseurSimulerCompteursSalarieResult($SWS_UtilisateurSuperviseurSimulerCompteursSalarieResult)
    {
        $new = clone $this;
        $new->SWS_UtilisateurSuperviseurSimulerCompteursSalarieResult = $SWS_UtilisateurSuperviseurSimulerCompteursSalarieResult;

        return $new;
    }
}

