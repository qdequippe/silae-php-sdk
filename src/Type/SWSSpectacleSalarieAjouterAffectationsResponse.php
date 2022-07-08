<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSpectacleSalarieAjouterAffectationsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieAjouterAffectationsResult
     */
    private $SWS_SpectacleSalarieAjouterAffectationsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieAjouterAffectationsResult
     */
    public function getSWS_SpectacleSalarieAjouterAffectationsResult()
    {
        return $this->SWS_SpectacleSalarieAjouterAffectationsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieAjouterAffectationsResult $SWS_SpectacleSalarieAjouterAffectationsResult
     * @return SWSSpectacleSalarieAjouterAffectationsResponse
     */
    public function withSWS_SpectacleSalarieAjouterAffectationsResult($SWS_SpectacleSalarieAjouterAffectationsResult)
    {
        $new = clone $this;
        $new->SWS_SpectacleSalarieAjouterAffectationsResult = $SWS_SpectacleSalarieAjouterAffectationsResult;

        return $new;
    }
}

