<?php

namespace Qdequippe\SilaePhpSdk\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SWSSpectacleSalarieAcquisitionAffectationsResponse implements ResultInterface
{
    /**
     * @var \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieAcquisitionAffectationsResult
     */
    private $SWS_SpectacleSalarieAcquisitionAffectationsResult;

    /**
     * @return \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieAcquisitionAffectationsResult
     */
    public function getSWS_SpectacleSalarieAcquisitionAffectationsResult()
    {
        return $this->SWS_SpectacleSalarieAcquisitionAffectationsResult;
    }

    /**
     * @param \Qdequippe\SilaePhpSdk\Type\SWSSpectacleSalarieAcquisitionAffectationsResult $SWS_SpectacleSalarieAcquisitionAffectationsResult
     * @return SWSSpectacleSalarieAcquisitionAffectationsResponse
     */
    public function withSWS_SpectacleSalarieAcquisitionAffectationsResult($SWS_SpectacleSalarieAcquisitionAffectationsResult)
    {
        $new = clone $this;
        $new->SWS_SpectacleSalarieAcquisitionAffectationsResult = $SWS_SpectacleSalarieAcquisitionAffectationsResult;

        return $new;
    }
}

