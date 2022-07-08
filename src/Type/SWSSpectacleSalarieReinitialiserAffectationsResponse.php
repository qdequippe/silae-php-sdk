<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSpectacleSalarieReinitialiserAffectationsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieReinitialiserAffectationsResult
     */
    private $SWS_SpectacleSalarieReinitialiserAffectationsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieReinitialiserAffectationsResult
     */
    public function getSWS_SpectacleSalarieReinitialiserAffectationsResult()
    {
        return $this->SWS_SpectacleSalarieReinitialiserAffectationsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieReinitialiserAffectationsResult $SWS_SpectacleSalarieReinitialiserAffectationsResult
     * @return SWSSpectacleSalarieReinitialiserAffectationsResponse
     */
    public function withSWS_SpectacleSalarieReinitialiserAffectationsResult($SWS_SpectacleSalarieReinitialiserAffectationsResult)
    {
        $new = clone $this;
        $new->SWS_SpectacleSalarieReinitialiserAffectationsResult = $SWS_SpectacleSalarieReinitialiserAffectationsResult;

        return $new;
    }
}

