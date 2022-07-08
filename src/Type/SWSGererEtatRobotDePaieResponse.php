<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSGererEtatRobotDePaieResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSGererEtatRobotDePaieResult
     */
    private $SWS_GererEtatRobotDePaieResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSGererEtatRobotDePaieResult
     */
    public function getSWS_GererEtatRobotDePaieResult()
    {
        return $this->SWS_GererEtatRobotDePaieResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSGererEtatRobotDePaieResult $SWS_GererEtatRobotDePaieResult
     * @return SWSGererEtatRobotDePaieResponse
     */
    public function withSWS_GererEtatRobotDePaieResult($SWS_GererEtatRobotDePaieResult)
    {
        $new = clone $this;
        $new->SWS_GererEtatRobotDePaieResult = $SWS_GererEtatRobotDePaieResult;

        return $new;
    }
}

